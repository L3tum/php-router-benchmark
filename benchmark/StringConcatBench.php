<?php

namespace Benchmark;

use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;

#[Iterations(100)]
#[Revs(10000)]
class StringConcatBench
{
    public function benchSprintf(): string
    {
        $get = "GET";
        $someRoute = "/some/route";
        return sprintf("%s_%s", $get, $someRoute);
    }

    public function benchFormattedString(): string
    {
        $get = "GET";
        $someRoute = "/some/route";
        return "{$get}_{$someRoute}";
    }

    public function benchConcatenation(): string
    {
        $get = "GET";
        $someRoute = "/some/route";

        return $get . '_' . $someRoute;
    }

    public function benchImplode(): string
    {
        $get = "GET";
        $someRoute = "/some/route";

        return implode('_', [$get, $someRoute]);
    }
}
