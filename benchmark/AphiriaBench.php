<?php

namespace Benchmark;

use Aphiria\Routing\Builders\RouteCollectionBuilder;
use Aphiria\Routing\Matchers\TrieRouteMatcher;
use Aphiria\Routing\UriTemplates\Compilers\Tries\TrieFactory;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Groups;
use PhpBench\Attributes\ParamProviders;

#[Groups(["RouterBenchmark", "Router"])]
class AphiriaBench extends AbstractRouter
{
    private TrieRouteMatcher $router;

    public function getRouter(): void
    {
        $routes = new RouteCollectionBuilder();
        $iterations = !empty(getenv('ROUTES')) ? getenv('ROUTES') : 100;
        for ($i = 0; $i < $iterations; $i++) {
            $routes->get('/static' . $i)->mapsToMethod('Aphiria', 'Static');
            $routes->get('/dynamic' . $i . '/:id(int)')->mapsToMethod('Aphiria', 'Static');
        }
        $router = new TrieRouteMatcher((new TrieFactory($routes->build()))->createTrie());
        $this->router = $router;
    }

    #[ParamProviders("provideStaticRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchStaticRoutes(array $params): void
    {
        $result = $this->router->matchRoute('GET', 'test.de', $params['route']);
        assert($result->matchFound);
    }

    #[ParamProviders("provideDynamicRoutes")]
    #[BeforeMethods("getRouter")]
    public function benchDynamicRoutes(array $params): void
    {
        $result = $this->router->matchRoute('GET', 'test.de', $params['route']);
        assert($result->matchFound);
    }
}
