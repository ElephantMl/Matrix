<?php

declare(strict_types=1);

namespace Elephant\Matrix\Statistics;

/**
 * Static array data.
 */
interface Statistics
{
    /**
     * Returns the average of the array.
     *
     * @return int|float
     */
    public function mean(): int | float;

    /**
     * Return the minimum.
     *
     * @return int|float
     */
    public function min(): int | float;

    /**
     * Return the maximum.
     *
     * @return int|float
     */
    public function max(): int | float;

    /**
     * Return the sum of the array.
     *
     * @return int|float
     */
    public function sum(): int | float;

    /**
     * Returns the number of items.
     *
     * @return int
     */
    public function countAll(): int;
}
