<?php

declare(strict_types=1);

namespace Unit\Generator;

use Elephant\Matrix\Generator\Generator;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Elephant\Matrix\Generator\Generator
 */
class GeneratorTest extends TestCase
{
    public function testOne(): void
    {
        self::assertEquals(
            [
                [1, 1, 1],
                [1, 1, 1],
                [1, 1, 1],
            ],
            Generator::ones(3, 3)
        );
    }

    public function testZeros(): void
    {
        self::assertEquals(
            [
                [0, 0, 0],
                [0, 0, 0],
                [0, 0, 0],
            ],
            Generator::zeros(3, 3)
        );
    }
}
