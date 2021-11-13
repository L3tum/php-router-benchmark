<?php

namespace Benchmark;

use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Groups;
use PhpBench\Attributes\ParamProviders;
use Riaf\Router;

#[Groups(["RouterBenchmark", "Router"])]
class RiafBench extends AbstractRouter
{
    private Router $router;

    public function getRouter(): void
    {
        $this->router = new Router($this->container);
    }

    #[ParamProviders("provideStaticRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchStaticRoutes(array $params): void
    {
        $handler = $this->router->match('GET', $params['route']);
        assert($handler !== null);
    }

    #[ParamProviders("provideDynamicRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchDynamicRoutes(array $params): void
    {
        $handler = $this->router->match('GET', $params['route']);
        assert($handler !== null);
    }
}
