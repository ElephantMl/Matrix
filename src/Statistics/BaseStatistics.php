<?php

declare(strict_types=1);

namespace Elephant\Matrix\Statistics;

use Elephant\Matrix\MatrixException;

/**
 * Static array data.
 */
class BaseStatistics implements Statistics
{
    public function __construct(private array $data)
    {
    }

    /**
     * Returns the average of the array.
     *
     * @return int|float
     *
     * @MatrixException
     */
    public function mean(): int | float
    {
        return $this->sum() / $this->countAll();
    }

    /**
     * Return the minimum.
     *
     * @return int|float
     *
     * @throws MatrixException
     */
    public function min(): int | float
    {
        $arr = call_user_func_array('array_merge', $this->data);
        if (!is_array($arr)) {
            throw new MatrixException('error');
        }

        /**
         * @var non-empty-array<array-key, mixed> $arr
         */
        $min = min($arr);

        if (!is_int($min) && !is_float($min)) {
            throw new MatrixException('error');
        }

        return $min;
    }

    /**
     * Return the maximum.
     *
     * @return int|float
     *
     * @MatrixException
     */
    public function max(): int | float
    {
        $arr = call_user_func_array('array_merge', $this->data);
        if (!is_array($arr)) {
            throw new MatrixException('error');
        }

        /**
         * @var non-empty-array<array-key, mixed> $arr
         */
        $max = max($arr);

        if (!is_int($max) && !is_float($max)) {
            throw new MatrixException('error');
        }

        return $max;
    }

    /**
     * Return the sum of the array.
     *
     * @return int|float
     *
     * @throws MatrixException
     */
    public function sum(): int | float
    {
        $arr = call_user_func_array('array_merge', $this->data);
        if (!is_array($arr)) {
            throw new MatrixException('error');
        }

        return array_sum($arr);
    }

    /**
     * Returns the number of items.
     *
     * @return int
     *
     * @throws MatrixException
     */
    public function countAll(): int
    {
        $arr = call_user_func_array('array_merge', $this->data);
        if (!is_countable($arr)) {
            throw new MatrixException('error');
        }
        return count($arr);
    }
}
