<?php

namespace Benchmark;

use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\ParamProviders;
use Symfony\Component\Routing\Loader\ClosureLoader;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Router;

class SymfonyBench extends AbstractRouter
{
    private Router $router;

    public function getRouter(): void
    {
        $iterations = !empty(getenv('ROUTES')) ? getenv('ROUTES') : 100;
        $resource = static function () use ($iterations): RouteCollection {
            $collection = new RouteCollection();

            for ($i = 0; $i < $iterations; $i++) {
                $collection->add('static_' . $i, new Route('/static' . $i, ['handler' => 'symfony::static']));
                $collection->add('dynamic_' . $i, new Route('/dynamic' . $i . '/{id}', ['handler' => 'symfony::dynamic']));
            }

            return $collection;
        };

        $this->router = new Router(new ClosureLoader(), $resource, ['cache_dir' => dirname(__DIR__) . '/caches']);
    }

    #[ParamProviders("provideStaticRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchStaticRoutes(array $params): void
    {
        $result = $this->router->match($params['route']);
        assert($result['handler'] !== null);
    }

    #[ParamProviders("provideDynamicRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchDynamicRoutes(array $params): void
    {
        $result = $this->router->match($params['route']);
        assert($result['handler'] !== null);
    }
}
