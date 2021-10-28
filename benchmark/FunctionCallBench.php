<?php

namespace Benchmark;

use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;

#[Iterations(100)]
#[Revs(10000)]
class FunctionCallBench
{
    public function benchDirectCall(): void
    {
        $this->test();
    }

    private function test()
    {

    }

    public function benchCallUserFuncCall(): void
    {
        call_user_func([$this, "test"]);
    }

    public function benchCallVariable(): void
    {
        "\Benchmark\FunctionCallBench::testStatic"();
    }

    public function benchCallStatic(): void
    {
        self::testStatic();
    }

    private static function testStatic()
    {

    }

    public function benchCallUserFuncStaticCall(): void
    {
        call_user_func([self::class, "testStatic"]);
    }
}
