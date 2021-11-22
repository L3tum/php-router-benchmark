<?php /** @noinspection PhpFullyQualifiedNameUsageInspection */

namespace Benchmark;

require_once dirname(__DIR__) . '/routers/riaf/vendor/autoload.php';

use Config;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Groups;
use PhpBench\Attributes\ParamProviders;
use Riaf\Compiler\RouterCompiler;
use Riaf\Metrics\Clock\SystemClock;
use Riaf\Metrics\Timing;
use Riaf\Routing\Route;

#[Groups(["RouterBenchmark", "Router"])]
class RiafBench extends AbstractRouter
{
    private \Riaf\Router $router;

    public function getRouter(): void
    {
        if (!class_exists("Riaf\Router")) {
            $timing = new Timing(new SystemClock());
            $compiler = new RouterCompiler(new Config());
            $iterations = !empty(getenv('ROUTES')) ? getenv('ROUTES') : 100;
            for ($i = 0; $i < $iterations; $i++) {
                $compiler->addRoute(new Route("/static$i"), "riaf::static");
                $compiler->addRoute(new Route("/dynamic$i/{id}", "GET", ["id" => "\d+"]), "riaf::dynamic");
            }
            $compiler->compile();
            unset($compiler);
            unset($timing);
            require_once dirname(__DIR__) . "/routers/riaf/src/Router.php";
        }
        /** @noinspection PhpFullyQualifiedNameUsageInspection */
        $this->router = new \Riaf\Router($this->container);
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
