<?php

namespace Benchmark;

use Generator;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\ParamProviders;
use PhpBench\Attributes\Revs;
use Psr\Container\ContainerInterface;

#[Iterations(100)]
#[Revs(1000)]
abstract class AbstractRouter
{
    protected ContainerInterface $container;
    private int $max;

    public function __construct()
    {
        $this->max = (!empty(getenv('ROUTES')) ? getenv('ROUTES') : 100) - 1;
        $this->container = new Container();
    }

    public function provideStaticRoutes(): Generator
    {
        yield "Static Best Case" => ['route' => "/static0"];
        yield "Static Worst Case" => ['route' => "/static$this->max"];
    }

    public function provideDynamicRoutes(): Generator
    {
        yield "Dynamic Best Case" => ['route' => "/dynamic0/0"];
        yield "Dynamic Worst Case" => ['route' => "/dynamic$this->max/99999"];
    }

    abstract public function getRouter(): void;

    #[BeforeMethods("getRouter")]
    #[ParamProviders("provideStaticRoutes")]
    abstract public function benchStaticRoutes(array $params): void;

    #[BeforeMethods("getRouter")]
    #[ParamProviders("provideDynamicRoutes")]
    abstract public function benchDynamicRoutes(array $params): void;
}
