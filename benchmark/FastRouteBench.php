<?php

namespace Benchmark;

use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Groups;
use PhpBench\Attributes\ParamProviders;
use function FastRoute\cachedDispatcher;

#[Groups(["RouterBenchmark", "Router"])]
class FastRouteBench extends AbstractRouter
{
    private Dispatcher $dispatcher;

    public function getRouter(): void
    {
        $iterations = !empty(getenv('ROUTES')) ? getenv('ROUTES') : 100;
        $this->dispatcher = cachedDispatcher(function(RouteCollector $r) use ($iterations) {
            for ($i = 0; $i < $iterations; $i ++) {
                $r->addRoute('GET', '/static' . $i, 'fastroute::static');
                $r->addRoute('GET', '/dynamic' . $i . '/{id:\d+}', 'fastroute::dynamic');
            }
        },[
            'cacheFile' => dirname(__DIR__) . '/caches/fastroute.cache',
        ]);
    }

    #[ParamProviders("provideStaticRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchStaticRoutes(array $params): void
    {
        $result = $this->dispatcher->dispatch('GET', $params['route']);
        assert($result[0] === Dispatcher::FOUND);
    }

    #[ParamProviders("provideDynamicRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchDynamicRoutes(array $params): void
    {
        $result = $this->dispatcher->dispatch('GET', $params['route']);
        assert($result[0] === Dispatcher::FOUND);
    }
}
