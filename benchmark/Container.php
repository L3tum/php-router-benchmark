<?php

namespace Benchmark;

use Nyholm\Psr7\Response;
use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    private $anonymous;

    public function __construct()
    {
        $this->anonymous = new class {
            public function handle()
            {
                return new Response();
            }
        };
    }

    public function get(string $id)
    {
        return $this->anonymous;
    }

    public function has(string $id): bool
    {
        return true;
    }
}
