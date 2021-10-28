<?php

namespace Benchmark;

use Generator;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\ParamProviders;
use PhpBench\Attributes\Revs;

#[Iterations(100)]
#[Revs(10000)]
class StaticRouteChooserBench
{
    private const KEY_METHOD_ARRAY = [
        'GET' => [
            'case1' => '\Benchmark\StaticRouteChooserBench::Case1',
            'case2' => '\Benchmark\StaticRouteChooserBench::Case2',
            'case3' => '\Benchmark\StaticRouteChooserBench::Case3',
            'case4' => '\Benchmark\StaticRouteChooserBench::Case4',
            'case5' => '\Benchmark\StaticRouteChooserBench::Case5',
            'case6' => '\Benchmark\StaticRouteChooserBench::Case6',
            'case7' => '\Benchmark\StaticRouteChooserBench::Case7',
            'case8' => '\Benchmark\StaticRouteChooserBench::Case8',
            'case9' => '\Benchmark\StaticRouteChooserBench::Case9',
        ]
    ];

    private const KEY_ARRAY = [
        'case1' => '\Benchmark\StaticRouteChooserBench::Case1',
        'case2' => '\Benchmark\StaticRouteChooserBench::Case2',
        'case3' => '\Benchmark\StaticRouteChooserBench::Case3',
        'case4' => '\Benchmark\StaticRouteChooserBench::Case4',
        'case5' => '\Benchmark\StaticRouteChooserBench::Case5',
        'case6' => '\Benchmark\StaticRouteChooserBench::Case6',
        'case7' => '\Benchmark\StaticRouteChooserBench::Case7',
        'case8' => '\Benchmark\StaticRouteChooserBench::Case8',
        'case9' => '\Benchmark\StaticRouteChooserBench::Case9',
    ];
    private array $CALLABLES = [];

    public static function Case1(): string
    {
        return 'case1';
    }

    public static function Case2(): string
    {
        return 'case1';
    }

    public static function Case3(): string
    {
        return 'case1';
    }

    public static function Case4(): string
    {
        return 'case1';
    }

    public static function Case5(): string
    {
        return 'case1';
    }

    public static function Case6(): string
    {
        return 'case1';
    }

    public static function Case7(): string
    {
        return 'case1';
    }

    public static function Case8(): string
    {
        return 'case1';
    }

    public static function Case9(): string
    {
        return 'case1';
    }

    public function keyProvider(): Generator
    {
        yield 'case' => ['key' => 'case1'];
        yield 'case' => ['key' => 'case2'];
        yield 'case' => ['key' => 'case3'];
        yield 'case' => ['key' => 'case4'];
        yield 'case' => ['key' => 'case5'];
        yield 'case' => ['key' => 'case6'];
        yield 'case' => ['key' => 'case7'];
        yield 'case' => ['key' => 'case8'];
        yield 'case' => ['key' => 'case9'];
    }

    #[ParamProviders("keyProvider")]
    public function benchArrayIndirectCall(array $params): string
    {
        $key = $params['key'];
        $method = self::KEY_ARRAY[$key] ?? null;

        if ($method !== null) {
            return $method();
        }

        return '';
    }

    #[ParamProviders("keyProvider")]
    public function benchMatch(array $params): string
    {
        $key = $params['key'];

        return match ($key) {
            'case1' => '1',
            'case2' => '2',
            'case3' => '3',
            'case4' => '4',
            'case5' => '5',
            'case6' => '6',
            'case7' => '7',
            'case8' => '8',
            'case9' => '9',
            default => ''
        };
    }

    #[ParamProviders("keyProvider")]
    public function benchIfElse(array $params): string
    {
        $key = $params['key'];

        if ($key === 'case1') {
            return '1';
        } elseif ($key === 'case2') {
            return '2';
        } elseif ($key === 'case3') {
            return '3';
        } elseif ($key === 'case4') {
            return '4';
        } elseif ($key === 'case5') {
            return '5';
        } elseif ($key === 'case6') {
            return '6';
        } elseif ($key === 'case7') {
            return '7';
        } elseif ($key === 'case8') {
            return '8';
        } elseif ($key === 'case9') {
            return '9';
        }

        return '';
    }

    public function setUpCallables()
    {
        for ($i = 0; $i < 10; $i++) {
            $this->CALLABLES["case$i"] = static function () {
                return "Hello";
            };
        }
    }

    #[BeforeMethods("setUpCallables")]
    #[ParamProviders("keyProvider")]
    public function benchCallables(array $params)
    {
        $route = $params['key'];
        return isset($this->CALLABLES[$route]) ? $this->CALLABLES[$route]() : null;
    }

    #[ParamProviders("keyProvider")]
    public function benchArrayAccessAndMatch(array $params): ?string
    {
        $route = $params['key'];
        $match = self::KEY_METHOD_ARRAY['GET'][$route] ?? null;

        return match($match){
            '\Benchmark\StaticRouteChooserBench::Case1' => 'case1',
            '\Benchmark\StaticRouteChooserBench::Case2' => 'case2',
            '\Benchmark\StaticRouteChooserBench::Case3' => 'case3',
            '\Benchmark\StaticRouteChooserBench::Case4' => 'case4',
            '\Benchmark\StaticRouteChooserBench::Case5' => 'case5',
            '\Benchmark\StaticRouteChooserBench::Case6' => 'case6',
            '\Benchmark\StaticRouteChooserBench::Case7' => 'case7',
            '\Benchmark\StaticRouteChooserBench::Case8' => 'case8',
            '\Benchmark\StaticRouteChooserBench::Case9' => 'case9',
            default => null
        };
    }

    #[ParamProviders("keyProvider")]
    public function benchNestedMatch(array $params): ?string
    {
        $route = $params['key'];
        $method = 'GET';

        return match ($method){
            'GET' => match($route){
                'case1' => '1',
                'case2' => '2',
                'case3' => '3',
                'case4' => '4',
                'case5' => '5',
                'case6' => '6',
                'case7' => '7',
                'case8' => '8',
                'case9' => '9',
                default => null
            },
            default => null
        };
    }
}
