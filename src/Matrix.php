<?php

declare(strict_types=1);

namespace Elephant\Matrix;

class Matrix
{
    /**
     * @var array
     */
    private array $matrix;

    /**
     * @var int
     */
    private int $rows;

    /**
     * @var int
     */
    private int $columns;

    /**
     * Matrix constructor.
     *
     * @param array<array<int|float>> $matrix
     */
    public function __construct(array $matrix)
    {
        $this->rows = count($matrix);
        $this->columns = count($matrix[0]);
        $this->matrix = $matrix;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->matrix;
    }

    /**
     * @param Matrix $matrix
     *
     * @return $this
     */
    public function dot(self $matrix): self
    {
        if ($this->columns !== $matrix->rows) {
            throw new \InvalidArgumentException('Inconsistent matrix supplied.');
        }
        $array1 = $this->toArray();
        $array2 = $matrix->toArray();

        $product = [];
        foreach ($array1 as $row => $rowData) {
            for ($col = 0; $col < $matrix->columns; ++$col) {
                $columnData = array_column($array2, $col);
                $sum = 0;
                foreach ($rowData as $key => $valueData) {
                    $sum += $valueData * $columnData[$key];
                }

                $product[$row][$col] = $sum;
            }
        }

        return new self($product);
    }

    public function transpose(): self
    {
        $return = [];
        $array = $this->matrix;
        foreach ($array as $key => $value) {
            if (!is_array($value)) {
                return new self($array);
            }
            foreach ($value as $key2 => $value2) {
                $return[$key2][$key] = $value2;
            }
        }
        return new self($return);
    }
}
