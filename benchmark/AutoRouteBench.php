<?php

namespace Benchmark;

use AutoRoute\AutoRoute;
use AutoRoute\Router;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Groups;
use PhpBench\Attributes\ParamProviders;

/**
 * TODO: Figure out why this is so slow
 * | benchmark      | set                  | revs | its | mem_peak  | mode     |
 * +----------------+----------------------+------+-----+-----------+----------+
 * | AutoRouteBench | Static Best Case     | 1000 | 100 | 1.245mb   | 11.350μs |
 * | AutoRouteBench | Static Average Case  | 1000 | 100 | 1.245mb   | 11.320μs |
 * | AutoRouteBench | Static Worst Case    | 1000 | 100 | 1.245mb   | 11.428μs |
 * | AutoRouteBench | Dynamic Best Case    | 1000 | 100 | 1.627mb   | 5.726μs  |
 * | AutoRouteBench | Dynamic Average Case | 1000 | 100 | 1.667mb   | 5.663μs  |
 * | AutoRouteBench | Dynamic Worst Case   | 1000 | 100 | 1.667mb   | 5.697μs  |
 */
#[Groups(["Router"])]
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
        // Try building it up first?
        $this->router->route('GET', '/static0');
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
