<?php

namespace Benchmark;

use Bramus\Router\Router;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\ParamProviders;

class BramusRouterBench extends AbstractRouter
{
    private Router $router;

    public function getRouter(): void
    {
        $router = new Router();
        $iterations = !empty(getenv('ROUTES')) ? getenv('ROUTES') : 100;
        for ($i = 0; $i < $iterations; $i++) {
            $router->get('/static' . $i, static function () {
                return 'bramus::static';
            });
            $router->get('/dynamic' . $i . '/(\d+)', static function () {
                return 'bramus::dynamic';
            });
        }
        $this->router = $router;
    }

    #[ParamProviders("provideStaticRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchStaticRoutes(array $params): void
    {
        // Not the best one to benchmark...
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = $params['route'];
        $handled = $this->router->run();
        assert($handled);
    }

    #[ParamProviders("provideDynamicRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchDynamicRoutes(array $params): void
    {
        // Not the best one to benchmark...
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = $params['route'];
        $handled = $this->router->run();
        assert($handled);
    }
}
