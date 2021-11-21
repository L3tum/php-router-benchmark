<?php

namespace Benchmark;

require_once dirname(__DIR__) . '/routers/altorouter/vendor/autoload.php';

use AltoRouter;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Groups;
use PhpBench\Attributes\ParamProviders;

#[Groups(["Router"])]
class AltoRouterBench extends AbstractRouter
{
    private AltoRouter $router;

    public function getRouter(): void
    {
        $router = new AltoRouter();

        $iterations = !empty(getenv('ROUTES')) ? getenv('ROUTES') : 100;
        for ($i = 0; $i < $iterations; $i++) {
            $router->map('GET', '/static' . $i, 'altorouter::static');
            $router->map('GET', '/dynamic' . $i . '/[i:id]', 'altorouter::dynamic');
        }

        $this->router = $router;
    }

    #[ParamProviders("provideStaticRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchStaticRoutes(array $params): void
    {
        $match = $this->router->match($params['route'], 'GET');
        assert($match !== false);
    }

    #[ParamProviders("provideDynamicRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchDynamicRoutes(array $params): void
    {
        $match = $this->router->match($params['route'], 'GET');
        assert($match !== false);
    }
}
