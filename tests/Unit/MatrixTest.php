<?php

declare(strict_types=1);

namespace Elephant\Matrix\Tests\Unit;

use Elephant\Matrix\Matrix;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Elephant\Matrix\Matrix
 */
class MatrixTest extends TestCase
{
    public function testDot()
    {
        $matrix = new Matrix(
            [
                [1,2,3],
                [1,2,3]
            ]
        );

        $matrix2 = new Matrix(
            [
                [1, 2],
                [1, 2],
                [1, 2],
            ]
        );

        self::assertEquals(
            [
                [6, 12],
                [6, 12],
            ],
            $matrix->dot($matrix2)->toArray()
        );
    }

    public function testTranspose(): void
    {
        $matrix = new Matrix(
            [
                [1, 2],
                [3, 4],
            ]
        );

        self::assertEquals(
            [
                [1, 3],
                [2, 4]
            ],
            $matrix->transpose()->toArray()
        );
    }

    public function testDeleteRow(): void
    {
        $matrix = new Matrix(
            [
                [1,2,3,4],
                [5,6,7,8],
                [9,10,11,12],
                [13,14,15,16],
            ]
        );

        self::assertEquals(
            [
                [5,6,7,8],
                [9,10,11,12],
                [13,14,15,16],
            ],
            $matrix->deleteRow(0)->toArray()
        );
    }

    public function testDeleteColumn(): void
    {
        $matrix = new Matrix(
            [
                [1,2,3,4],
                [5,6,7,8],
                [9,10,11,12],
                [13,14,15,16],
            ]
        );

        self::assertEquals(
            [
                [2,3,4],
                [6,7,8],
                [10,11,12],
                [14,15,16],
            ],
            $matrix->deleteColumn(0)->toArray()
        );
    }

    public function testMinorMatrix(): void
    {
        $matrix = new Matrix(
            [
                [1,2,3,4],
                [5,6,7,8],
                [9,10,11,12],
                [13,14,15,16],
            ]
        );

        self::assertEquals(
            [
                [6,7,8],
                [10,11,12],
                [14,15,16],
            ],
            $matrix->minorMatrix(0, 0)->toArray()
        );
    }
}
