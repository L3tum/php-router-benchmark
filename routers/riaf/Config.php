<?php

use Nyholm\Psr7\Factory\Psr17Factory;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Riaf\Configuration\BaseConfiguration;
use Riaf\Configuration\RouterCompilerConfiguration;

class Config extends BaseConfiguration implements RouterCompilerConfiguration
{

    public function getRouterNamespace(): string
    {
        return "Riaf";
    }

    public function getRouterFilepath(): string
    {
        return "/src/Router.php";
    }

    public function getAdditionalServices(): array
    {
        return [
            ResponseFactoryInterface::class => Psr17Factory::class,
            ServerRequestFactoryInterface::class => Psr17Factory::class
        ];
    }
}
