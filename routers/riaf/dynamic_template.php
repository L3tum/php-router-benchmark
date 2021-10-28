<?php

/** @var string $route */
/** @var string $method */
/** @var string $className */

assert(is_string($route));
assert(is_string($method));
assert(is_string($className));

echo "<?php" . PHP_EOL;

?>

namespace Riaf\Generated;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Riaf\Routing\Route;

class <?= $className ?>
{
    public function __construct(private ResponseFactoryInterface $responseFactory)
    {
    }

    #[Route("<?= $route ?>", method: "<?= $method ?>", requirements: ['id' => '\d+'])]
    public function handle(): ResponseInterface
    {
        return $this->responseFactory->createResponse();
    }
}
