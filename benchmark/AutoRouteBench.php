<?php

namespace Benchmark;

use AutoRoute\AutoRoute;
use AutoRoute\Router;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\ParamProviders;

class AutoRouteBench extends AbstractRouter
{
    private Router $router;

    public function getRouter(): void
    {
        $this->router = (new AutoRoute(
            'AutoRoute',
            dirname(__DIR__) . '/routers/autoroute/src',
            // You cannot actually assign a LoggerInterface to AutoRoute since it expects a Logger (AutoRoute's own definition)
        ))->getRouter();
    }

    #[ParamProviders("provideStaticRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchStaticRoutes(array $params): void
    {
        $route = $this->router->route('GET', $params['route']);
        assert($route->error === null);
    }

    #[ParamProviders("provideDynamicRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchDynamicRoutes(array $params): void
    {
        $route = $this->router->route('GET', $params['route']);
        assert($route->error === null);
    }
}
