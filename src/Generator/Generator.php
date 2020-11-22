<?php

declare(strict_types=1);

namespace Elephant\Matrix\Generator;

class Generator
{
    /**
     * Generates a matrix of ones.
     *
     * @param int $rows
     * @param int $columns
     *
     * @return array<array<int>>
     */
    public static function ones(int $rows, int $columns): array
    {
        $result = [];

        for ($i = 0; $i < $rows; $i++) {
            $result[] = array_fill(0, $columns, 1);
        }

        return $result;
    }

    /**
     * Generates a matrix of zeros.
     *
     * @param int $rows
     * @param int $columns
     *
     * @return array<array<int>>
     */
    public static function zeros(int $rows, int $columns): array
    {
        $result = [];

        for ($i = 0; $i < $rows; $i++) {
            $result[] = array_fill(0, $columns, 0);
        }

        return $result;
    }
}
