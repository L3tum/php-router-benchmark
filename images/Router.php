<?php

namespace Riaf;

use Psr\Http\Server\RequestHandlerInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Server\MiddlewareInterface;
use Riaf\PsrExtensions\Middleware\Middleware;

#[Middleware(-100)]
class Router implements MiddlewareInterface, RequestHandlerInterface
{
    public function __construct(private ContainerInterface $container)
    {
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        return $this->handle($request);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $method = $request->getMethod();
        $path = $request->getUri()->getPath();
		return match ($method)
		{
			"GET" => match($path) {
				"/static0" => $this->container->get("Riaf\Generated\StaticRoute0")->handle(),
				"/static1" => $this->container->get("Riaf\Generated\StaticRoute1")->handle(),
				"/static10" => $this->container->get("Riaf\Generated\StaticRoute10")->handle(),
				"/static11" => $this->container->get("Riaf\Generated\StaticRoute11")->handle(),
				"/static12" => $this->container->get("Riaf\Generated\StaticRoute12")->handle(),
				"/static13" => $this->container->get("Riaf\Generated\StaticRoute13")->handle(),
				"/static14" => $this->container->get("Riaf\Generated\StaticRoute14")->handle(),
				"/static15" => $this->container->get("Riaf\Generated\StaticRoute15")->handle(),
				"/static16" => $this->container->get("Riaf\Generated\StaticRoute16")->handle(),
				"/static17" => $this->container->get("Riaf\Generated\StaticRoute17")->handle(),
				"/static18" => $this->container->get("Riaf\Generated\StaticRoute18")->handle(),
				"/static19" => $this->container->get("Riaf\Generated\StaticRoute19")->handle(),
				"/static2" => $this->container->get("Riaf\Generated\StaticRoute2")->handle(),
				"/static20" => $this->container->get("Riaf\Generated\StaticRoute20")->handle(),
				"/static21" => $this->container->get("Riaf\Generated\StaticRoute21")->handle(),
				"/static22" => $this->container->get("Riaf\Generated\StaticRoute22")->handle(),
				"/static23" => $this->container->get("Riaf\Generated\StaticRoute23")->handle(),
				"/static24" => $this->container->get("Riaf\Generated\StaticRoute24")->handle(),
				"/static25" => $this->container->get("Riaf\Generated\StaticRoute25")->handle(),
				"/static26" => $this->container->get("Riaf\Generated\StaticRoute26")->handle(),
				"/static27" => $this->container->get("Riaf\Generated\StaticRoute27")->handle(),
				"/static28" => $this->container->get("Riaf\Generated\StaticRoute28")->handle(),
				"/static29" => $this->container->get("Riaf\Generated\StaticRoute29")->handle(),
				"/static3" => $this->container->get("Riaf\Generated\StaticRoute3")->handle(),
				"/static30" => $this->container->get("Riaf\Generated\StaticRoute30")->handle(),
				"/static31" => $this->container->get("Riaf\Generated\StaticRoute31")->handle(),
				"/static32" => $this->container->get("Riaf\Generated\StaticRoute32")->handle(),
				"/static33" => $this->container->get("Riaf\Generated\StaticRoute33")->handle(),
				"/static34" => $this->container->get("Riaf\Generated\StaticRoute34")->handle(),
				"/static35" => $this->container->get("Riaf\Generated\StaticRoute35")->handle(),
				"/static36" => $this->container->get("Riaf\Generated\StaticRoute36")->handle(),
				"/static37" => $this->container->get("Riaf\Generated\StaticRoute37")->handle(),
				"/static38" => $this->container->get("Riaf\Generated\StaticRoute38")->handle(),
				"/static39" => $this->container->get("Riaf\Generated\StaticRoute39")->handle(),
				"/static4" => $this->container->get("Riaf\Generated\StaticRoute4")->handle(),
				"/static40" => $this->container->get("Riaf\Generated\StaticRoute40")->handle(),
				"/static41" => $this->container->get("Riaf\Generated\StaticRoute41")->handle(),
				"/static42" => $this->container->get("Riaf\Generated\StaticRoute42")->handle(),
				"/static43" => $this->container->get("Riaf\Generated\StaticRoute43")->handle(),
				"/static44" => $this->container->get("Riaf\Generated\StaticRoute44")->handle(),
				"/static45" => $this->container->get("Riaf\Generated\StaticRoute45")->handle(),
				"/static46" => $this->container->get("Riaf\Generated\StaticRoute46")->handle(),
				"/static47" => $this->container->get("Riaf\Generated\StaticRoute47")->handle(),
				"/static48" => $this->container->get("Riaf\Generated\StaticRoute48")->handle(),
				"/static49" => $this->container->get("Riaf\Generated\StaticRoute49")->handle(),
				"/static5" => $this->container->get("Riaf\Generated\StaticRoute5")->handle(),
				"/static50" => $this->container->get("Riaf\Generated\StaticRoute50")->handle(),
				"/static51" => $this->container->get("Riaf\Generated\StaticRoute51")->handle(),
				"/static52" => $this->container->get("Riaf\Generated\StaticRoute52")->handle(),
				"/static53" => $this->container->get("Riaf\Generated\StaticRoute53")->handle(),
				"/static54" => $this->container->get("Riaf\Generated\StaticRoute54")->handle(),
				"/static55" => $this->container->get("Riaf\Generated\StaticRoute55")->handle(),
				"/static56" => $this->container->get("Riaf\Generated\StaticRoute56")->handle(),
				"/static57" => $this->container->get("Riaf\Generated\StaticRoute57")->handle(),
				"/static58" => $this->container->get("Riaf\Generated\StaticRoute58")->handle(),
				"/static59" => $this->container->get("Riaf\Generated\StaticRoute59")->handle(),
				"/static6" => $this->container->get("Riaf\Generated\StaticRoute6")->handle(),
				"/static60" => $this->container->get("Riaf\Generated\StaticRoute60")->handle(),
				"/static61" => $this->container->get("Riaf\Generated\StaticRoute61")->handle(),
				"/static62" => $this->container->get("Riaf\Generated\StaticRoute62")->handle(),
				"/static63" => $this->container->get("Riaf\Generated\StaticRoute63")->handle(),
				"/static64" => $this->container->get("Riaf\Generated\StaticRoute64")->handle(),
				"/static65" => $this->container->get("Riaf\Generated\StaticRoute65")->handle(),
				"/static66" => $this->container->get("Riaf\Generated\StaticRoute66")->handle(),
				"/static67" => $this->container->get("Riaf\Generated\StaticRoute67")->handle(),
				"/static68" => $this->container->get("Riaf\Generated\StaticRoute68")->handle(),
				"/static69" => $this->container->get("Riaf\Generated\StaticRoute69")->handle(),
				"/static7" => $this->container->get("Riaf\Generated\StaticRoute7")->handle(),
				"/static70" => $this->container->get("Riaf\Generated\StaticRoute70")->handle(),
				"/static71" => $this->container->get("Riaf\Generated\StaticRoute71")->handle(),
				"/static72" => $this->container->get("Riaf\Generated\StaticRoute72")->handle(),
				"/static73" => $this->container->get("Riaf\Generated\StaticRoute73")->handle(),
				"/static74" => $this->container->get("Riaf\Generated\StaticRoute74")->handle(),
				"/static75" => $this->container->get("Riaf\Generated\StaticRoute75")->handle(),
				"/static76" => $this->container->get("Riaf\Generated\StaticRoute76")->handle(),
				"/static77" => $this->container->get("Riaf\Generated\StaticRoute77")->handle(),
				"/static78" => $this->container->get("Riaf\Generated\StaticRoute78")->handle(),
				"/static79" => $this->container->get("Riaf\Generated\StaticRoute79")->handle(),
				"/static8" => $this->container->get("Riaf\Generated\StaticRoute8")->handle(),
				"/static80" => $this->container->get("Riaf\Generated\StaticRoute80")->handle(),
				"/static81" => $this->container->get("Riaf\Generated\StaticRoute81")->handle(),
				"/static82" => $this->container->get("Riaf\Generated\StaticRoute82")->handle(),
				"/static83" => $this->container->get("Riaf\Generated\StaticRoute83")->handle(),
				"/static84" => $this->container->get("Riaf\Generated\StaticRoute84")->handle(),
				"/static85" => $this->container->get("Riaf\Generated\StaticRoute85")->handle(),
				"/static86" => $this->container->get("Riaf\Generated\StaticRoute86")->handle(),
				"/static87" => $this->container->get("Riaf\Generated\StaticRoute87")->handle(),
				"/static88" => $this->container->get("Riaf\Generated\StaticRoute88")->handle(),
				"/static89" => $this->container->get("Riaf\Generated\StaticRoute89")->handle(),
				"/static9" => $this->container->get("Riaf\Generated\StaticRoute9")->handle(),
				"/static90" => $this->container->get("Riaf\Generated\StaticRoute90")->handle(),
				"/static91" => $this->container->get("Riaf\Generated\StaticRoute91")->handle(),
				"/static92" => $this->container->get("Riaf\Generated\StaticRoute92")->handle(),
				"/static93" => $this->container->get("Riaf\Generated\StaticRoute93")->handle(),
				"/static94" => $this->container->get("Riaf\Generated\StaticRoute94")->handle(),
				"/static95" => $this->container->get("Riaf\Generated\StaticRoute95")->handle(),
				"/static96" => $this->container->get("Riaf\Generated\StaticRoute96")->handle(),
				"/static97" => $this->container->get("Riaf\Generated\StaticRoute97")->handle(),
				"/static98" => $this->container->get("Riaf\Generated\StaticRoute98")->handle(),
				"/static99" => $this->container->get("Riaf\Generated\StaticRoute99")->handle(),
				default => $this->handleDynamicRoute($method, $path, $request)
			},
			default => $this->handleDynamicRoute($method, $path, $request)
		};
    }

    private function handleDynamicRoute(string $method, string $path, ServerRequestInterface $request): ?ResponseInterface
    {
        $uriParts = explode('/', $path);
        $countParts = count($uriParts);

        return match($method)
        {
			"GET" => match($countParts)
			{
				3 => match($uriParts[0])
				{
					"" => match($uriParts[1])
						{
							"dynamic0" => match(true)
							{
								preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute0")->handle(),
								default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
							},
						"dynamic1" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute1")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic10" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute10")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic11" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute11")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic12" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute12")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic13" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute13")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic14" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute14")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic15" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute15")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic16" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute16")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic17" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute17")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic18" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute18")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic19" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute19")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic2" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute2")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic20" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute20")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic21" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute21")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic22" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute22")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic23" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute23")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic24" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute24")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic25" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute25")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic26" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute26")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic27" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute27")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic28" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute28")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic29" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute29")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic3" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute3")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic30" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute30")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic31" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute31")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic32" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute32")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic33" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute33")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic34" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute34")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic35" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute35")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic36" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute36")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic37" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute37")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic38" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute38")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic39" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute39")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic4" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute4")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic40" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute40")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic41" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute41")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic42" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute42")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic43" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute43")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic44" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute44")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic45" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute45")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic46" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute46")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic47" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute47")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic48" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute48")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic49" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute49")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic5" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute5")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic50" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute50")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic51" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute51")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic52" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute52")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic53" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute53")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic54" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute54")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic55" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute55")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic56" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute56")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic57" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute57")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic58" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute58")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic59" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute59")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic6" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute6")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic60" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute60")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic61" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute61")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic62" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute62")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic63" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute63")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic64" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute64")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic65" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute65")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic66" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute66")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic67" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute67")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic68" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute68")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic69" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute69")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic7" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute7")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic70" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute70")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic71" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute71")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic72" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute72")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic73" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute73")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic74" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute74")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic75" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute75")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic76" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute76")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic77" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute77")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic78" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute78")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic79" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute79")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic8" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute8")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic80" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute80")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic81" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute81")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic82" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute82")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic83" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute83")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic84" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute84")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic85" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute85")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic86" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute86")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic87" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute87")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic88" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute88")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic89" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute89")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic9" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute9")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic90" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute90")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic91" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute91")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic92" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute92")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic93" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute93")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic94" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute94")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic95" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute95")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic96" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute96")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic97" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute97")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic98" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute98")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
						"dynamic99" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => $this->container->get("Riaf\Generated\DynamicRoute99")->handle(),
							default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
						},
					default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
				},
					default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404),
				},
				default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404)
			},
            default => $this->container->get(ResponseFactoryInterface::class)->createResponse(404)
        };
    }

    public function matchRoute(string $method, string $path): ?string
    {
		return match ($method)
		{
			"GET" => match($path) {
				"/static0" => "Riaf\Generated\StaticRoute0::handle",
				"/static1" => "Riaf\Generated\StaticRoute1::handle",
				"/static10" => "Riaf\Generated\StaticRoute10::handle",
				"/static11" => "Riaf\Generated\StaticRoute11::handle",
				"/static12" => "Riaf\Generated\StaticRoute12::handle",
				"/static13" => "Riaf\Generated\StaticRoute13::handle",
				"/static14" => "Riaf\Generated\StaticRoute14::handle",
				"/static15" => "Riaf\Generated\StaticRoute15::handle",
				"/static16" => "Riaf\Generated\StaticRoute16::handle",
				"/static17" => "Riaf\Generated\StaticRoute17::handle",
				"/static18" => "Riaf\Generated\StaticRoute18::handle",
				"/static19" => "Riaf\Generated\StaticRoute19::handle",
				"/static2" => "Riaf\Generated\StaticRoute2::handle",
				"/static20" => "Riaf\Generated\StaticRoute20::handle",
				"/static21" => "Riaf\Generated\StaticRoute21::handle",
				"/static22" => "Riaf\Generated\StaticRoute22::handle",
				"/static23" => "Riaf\Generated\StaticRoute23::handle",
				"/static24" => "Riaf\Generated\StaticRoute24::handle",
				"/static25" => "Riaf\Generated\StaticRoute25::handle",
				"/static26" => "Riaf\Generated\StaticRoute26::handle",
				"/static27" => "Riaf\Generated\StaticRoute27::handle",
				"/static28" => "Riaf\Generated\StaticRoute28::handle",
				"/static29" => "Riaf\Generated\StaticRoute29::handle",
				"/static3" => "Riaf\Generated\StaticRoute3::handle",
				"/static30" => "Riaf\Generated\StaticRoute30::handle",
				"/static31" => "Riaf\Generated\StaticRoute31::handle",
				"/static32" => "Riaf\Generated\StaticRoute32::handle",
				"/static33" => "Riaf\Generated\StaticRoute33::handle",
				"/static34" => "Riaf\Generated\StaticRoute34::handle",
				"/static35" => "Riaf\Generated\StaticRoute35::handle",
				"/static36" => "Riaf\Generated\StaticRoute36::handle",
				"/static37" => "Riaf\Generated\StaticRoute37::handle",
				"/static38" => "Riaf\Generated\StaticRoute38::handle",
				"/static39" => "Riaf\Generated\StaticRoute39::handle",
				"/static4" => "Riaf\Generated\StaticRoute4::handle",
				"/static40" => "Riaf\Generated\StaticRoute40::handle",
				"/static41" => "Riaf\Generated\StaticRoute41::handle",
				"/static42" => "Riaf\Generated\StaticRoute42::handle",
				"/static43" => "Riaf\Generated\StaticRoute43::handle",
				"/static44" => "Riaf\Generated\StaticRoute44::handle",
				"/static45" => "Riaf\Generated\StaticRoute45::handle",
				"/static46" => "Riaf\Generated\StaticRoute46::handle",
				"/static47" => "Riaf\Generated\StaticRoute47::handle",
				"/static48" => "Riaf\Generated\StaticRoute48::handle",
				"/static49" => "Riaf\Generated\StaticRoute49::handle",
				"/static5" => "Riaf\Generated\StaticRoute5::handle",
				"/static50" => "Riaf\Generated\StaticRoute50::handle",
				"/static51" => "Riaf\Generated\StaticRoute51::handle",
				"/static52" => "Riaf\Generated\StaticRoute52::handle",
				"/static53" => "Riaf\Generated\StaticRoute53::handle",
				"/static54" => "Riaf\Generated\StaticRoute54::handle",
				"/static55" => "Riaf\Generated\StaticRoute55::handle",
				"/static56" => "Riaf\Generated\StaticRoute56::handle",
				"/static57" => "Riaf\Generated\StaticRoute57::handle",
				"/static58" => "Riaf\Generated\StaticRoute58::handle",
				"/static59" => "Riaf\Generated\StaticRoute59::handle",
				"/static6" => "Riaf\Generated\StaticRoute6::handle",
				"/static60" => "Riaf\Generated\StaticRoute60::handle",
				"/static61" => "Riaf\Generated\StaticRoute61::handle",
				"/static62" => "Riaf\Generated\StaticRoute62::handle",
				"/static63" => "Riaf\Generated\StaticRoute63::handle",
				"/static64" => "Riaf\Generated\StaticRoute64::handle",
				"/static65" => "Riaf\Generated\StaticRoute65::handle",
				"/static66" => "Riaf\Generated\StaticRoute66::handle",
				"/static67" => "Riaf\Generated\StaticRoute67::handle",
				"/static68" => "Riaf\Generated\StaticRoute68::handle",
				"/static69" => "Riaf\Generated\StaticRoute69::handle",
				"/static7" => "Riaf\Generated\StaticRoute7::handle",
				"/static70" => "Riaf\Generated\StaticRoute70::handle",
				"/static71" => "Riaf\Generated\StaticRoute71::handle",
				"/static72" => "Riaf\Generated\StaticRoute72::handle",
				"/static73" => "Riaf\Generated\StaticRoute73::handle",
				"/static74" => "Riaf\Generated\StaticRoute74::handle",
				"/static75" => "Riaf\Generated\StaticRoute75::handle",
				"/static76" => "Riaf\Generated\StaticRoute76::handle",
				"/static77" => "Riaf\Generated\StaticRoute77::handle",
				"/static78" => "Riaf\Generated\StaticRoute78::handle",
				"/static79" => "Riaf\Generated\StaticRoute79::handle",
				"/static8" => "Riaf\Generated\StaticRoute8::handle",
				"/static80" => "Riaf\Generated\StaticRoute80::handle",
				"/static81" => "Riaf\Generated\StaticRoute81::handle",
				"/static82" => "Riaf\Generated\StaticRoute82::handle",
				"/static83" => "Riaf\Generated\StaticRoute83::handle",
				"/static84" => "Riaf\Generated\StaticRoute84::handle",
				"/static85" => "Riaf\Generated\StaticRoute85::handle",
				"/static86" => "Riaf\Generated\StaticRoute86::handle",
				"/static87" => "Riaf\Generated\StaticRoute87::handle",
				"/static88" => "Riaf\Generated\StaticRoute88::handle",
				"/static89" => "Riaf\Generated\StaticRoute89::handle",
				"/static9" => "Riaf\Generated\StaticRoute9::handle",
				"/static90" => "Riaf\Generated\StaticRoute90::handle",
				"/static91" => "Riaf\Generated\StaticRoute91::handle",
				"/static92" => "Riaf\Generated\StaticRoute92::handle",
				"/static93" => "Riaf\Generated\StaticRoute93::handle",
				"/static94" => "Riaf\Generated\StaticRoute94::handle",
				"/static95" => "Riaf\Generated\StaticRoute95::handle",
				"/static96" => "Riaf\Generated\StaticRoute96::handle",
				"/static97" => "Riaf\Generated\StaticRoute97::handle",
				"/static98" => "Riaf\Generated\StaticRoute98::handle",
				"/static99" => "Riaf\Generated\StaticRoute99::handle",
				default => $this->matchDynamicRoute($method, $path)
			},
			default => $this->matchDynamicRoute($method, $path)
		};
    }

    private function matchDynamicRoute(string $method, string $path): ?string
    {
        $uriParts = explode('/', $path);
        $countParts = count($uriParts);

        return match($method)
        {
			"GET" => match($countParts)
			{
				3 => match($uriParts[0])
				{
					"" => match($uriParts[1])
						{
							"dynamic0" => match(true)
							{
								preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute0::handle",
								default => null,
							},
						"dynamic1" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute1::handle",
							default => null,
						},
						"dynamic10" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute10::handle",
							default => null,
						},
						"dynamic11" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute11::handle",
							default => null,
						},
						"dynamic12" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute12::handle",
							default => null,
						},
						"dynamic13" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute13::handle",
							default => null,
						},
						"dynamic14" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute14::handle",
							default => null,
						},
						"dynamic15" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute15::handle",
							default => null,
						},
						"dynamic16" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute16::handle",
							default => null,
						},
						"dynamic17" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute17::handle",
							default => null,
						},
						"dynamic18" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute18::handle",
							default => null,
						},
						"dynamic19" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute19::handle",
							default => null,
						},
						"dynamic2" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute2::handle",
							default => null,
						},
						"dynamic20" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute20::handle",
							default => null,
						},
						"dynamic21" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute21::handle",
							default => null,
						},
						"dynamic22" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute22::handle",
							default => null,
						},
						"dynamic23" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute23::handle",
							default => null,
						},
						"dynamic24" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute24::handle",
							default => null,
						},
						"dynamic25" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute25::handle",
							default => null,
						},
						"dynamic26" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute26::handle",
							default => null,
						},
						"dynamic27" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute27::handle",
							default => null,
						},
						"dynamic28" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute28::handle",
							default => null,
						},
						"dynamic29" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute29::handle",
							default => null,
						},
						"dynamic3" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute3::handle",
							default => null,
						},
						"dynamic30" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute30::handle",
							default => null,
						},
						"dynamic31" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute31::handle",
							default => null,
						},
						"dynamic32" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute32::handle",
							default => null,
						},
						"dynamic33" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute33::handle",
							default => null,
						},
						"dynamic34" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute34::handle",
							default => null,
						},
						"dynamic35" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute35::handle",
							default => null,
						},
						"dynamic36" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute36::handle",
							default => null,
						},
						"dynamic37" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute37::handle",
							default => null,
						},
						"dynamic38" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute38::handle",
							default => null,
						},
						"dynamic39" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute39::handle",
							default => null,
						},
						"dynamic4" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute4::handle",
							default => null,
						},
						"dynamic40" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute40::handle",
							default => null,
						},
						"dynamic41" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute41::handle",
							default => null,
						},
						"dynamic42" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute42::handle",
							default => null,
						},
						"dynamic43" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute43::handle",
							default => null,
						},
						"dynamic44" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute44::handle",
							default => null,
						},
						"dynamic45" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute45::handle",
							default => null,
						},
						"dynamic46" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute46::handle",
							default => null,
						},
						"dynamic47" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute47::handle",
							default => null,
						},
						"dynamic48" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute48::handle",
							default => null,
						},
						"dynamic49" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute49::handle",
							default => null,
						},
						"dynamic5" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute5::handle",
							default => null,
						},
						"dynamic50" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute50::handle",
							default => null,
						},
						"dynamic51" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute51::handle",
							default => null,
						},
						"dynamic52" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute52::handle",
							default => null,
						},
						"dynamic53" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute53::handle",
							default => null,
						},
						"dynamic54" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute54::handle",
							default => null,
						},
						"dynamic55" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute55::handle",
							default => null,
						},
						"dynamic56" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute56::handle",
							default => null,
						},
						"dynamic57" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute57::handle",
							default => null,
						},
						"dynamic58" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute58::handle",
							default => null,
						},
						"dynamic59" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute59::handle",
							default => null,
						},
						"dynamic6" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute6::handle",
							default => null,
						},
						"dynamic60" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute60::handle",
							default => null,
						},
						"dynamic61" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute61::handle",
							default => null,
						},
						"dynamic62" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute62::handle",
							default => null,
						},
						"dynamic63" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute63::handle",
							default => null,
						},
						"dynamic64" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute64::handle",
							default => null,
						},
						"dynamic65" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute65::handle",
							default => null,
						},
						"dynamic66" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute66::handle",
							default => null,
						},
						"dynamic67" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute67::handle",
							default => null,
						},
						"dynamic68" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute68::handle",
							default => null,
						},
						"dynamic69" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute69::handle",
							default => null,
						},
						"dynamic7" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute7::handle",
							default => null,
						},
						"dynamic70" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute70::handle",
							default => null,
						},
						"dynamic71" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute71::handle",
							default => null,
						},
						"dynamic72" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute72::handle",
							default => null,
						},
						"dynamic73" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute73::handle",
							default => null,
						},
						"dynamic74" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute74::handle",
							default => null,
						},
						"dynamic75" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute75::handle",
							default => null,
						},
						"dynamic76" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute76::handle",
							default => null,
						},
						"dynamic77" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute77::handle",
							default => null,
						},
						"dynamic78" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute78::handle",
							default => null,
						},
						"dynamic79" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute79::handle",
							default => null,
						},
						"dynamic8" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute8::handle",
							default => null,
						},
						"dynamic80" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute80::handle",
							default => null,
						},
						"dynamic81" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute81::handle",
							default => null,
						},
						"dynamic82" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute82::handle",
							default => null,
						},
						"dynamic83" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute83::handle",
							default => null,
						},
						"dynamic84" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute84::handle",
							default => null,
						},
						"dynamic85" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute85::handle",
							default => null,
						},
						"dynamic86" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute86::handle",
							default => null,
						},
						"dynamic87" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute87::handle",
							default => null,
						},
						"dynamic88" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute88::handle",
							default => null,
						},
						"dynamic89" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute89::handle",
							default => null,
						},
						"dynamic9" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute9::handle",
							default => null,
						},
						"dynamic90" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute90::handle",
							default => null,
						},
						"dynamic91" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute91::handle",
							default => null,
						},
						"dynamic92" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute92::handle",
							default => null,
						},
						"dynamic93" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute93::handle",
							default => null,
						},
						"dynamic94" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute94::handle",
							default => null,
						},
						"dynamic95" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute95::handle",
							default => null,
						},
						"dynamic96" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute96::handle",
							default => null,
						},
						"dynamic97" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute97::handle",
							default => null,
						},
						"dynamic98" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute98::handle",
							default => null,
						},
						"dynamic99" => match(true)
						{
							preg_match("/^\d+$/", $uriParts[2], $matches2) === 1 => "Riaf\Generated\DynamicRoute99::handle",
							default => null,
						},
					default => null,
				},
					default => null,
				},
				default => null
			},
            default => null
        };
    }
}

