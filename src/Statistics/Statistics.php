<?php

declare(strict_types=1);

namespace Elephant\Matrix\Statistics;

use Elephant\Matrix\MatrixException;

/**
 * Static array data.
 */
interface Statistics
{
    /**
     * Returns the average of the array.
     *
     * @return int|float
     *
     * @throws MatrixException
     */
    public function mean(): int | float;

    /**
     * Return the minimum.
     *
     * @return int|float
     *
     * @throws MatrixException
     */
    public function min(): int | float;

    /**
     * Return the maximum.
     *
     * @return int|float
     *
     * @throws MatrixException
     */
    public function max(): int | float;

    /**
     * Return the sum of the array.
     *
     * @return int|float
     *
     * @throws MatrixException
     */
    public function sum(): int | float;

    /**
     * Returns the number of items.
     *
     * @return int
     *
     * @throws MatrixException
     */
    public function countAll(): int;
}
