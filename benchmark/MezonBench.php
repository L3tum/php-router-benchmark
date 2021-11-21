<?php

namespace Benchmark;

require_once dirname(__DIR__) . '/routers/mezon/vendor/autoload.php';

use Mezon\Router\Router;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Groups;
use PhpBench\Attributes\ParamProviders;

#[Groups(["Router"])]
class MezonBench extends AbstractRouter
{
    private Router $router;

    public function getRouter(): void
    {
        $router = new Router();
        $iterations = !empty(getenv('ROUTES')) ? getenv('ROUTES') : 100;
        for ($i = 0; $i < $iterations; $i++) {
            $router->addRoute('/static' . $i, 'mezon::static', 'GET');
            $router->addRoute('/dynamic' . $i . '/[i:id]', 'mezon::dynamic', 'GET');
        }
        $router->warmCache();
        $this->router = $router;
    }

    #[ParamProviders("provideStaticRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchStaticRoutes(array $params): void
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $callback = $this->router->getCallback($params['route']);
        assert($callback !== false);
    }

    #[ParamProviders("provideDynamicRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchDynamicRoutes(array $params): void
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $callback = $this->router->getCallback($params['route']);
        assert($callback !== false);
    }
}
