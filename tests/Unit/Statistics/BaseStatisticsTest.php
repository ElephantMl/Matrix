<?php

declare(strict_types=1);

namespace Elephant\Matrix\Tests\Statistics;

use Elephant\Matrix\Statistics\BaseStatistics;
use Elephant\Matrix\Statistics\Statistics;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Elephant\Matrix\Statistics\BaseStatistics
 */
class BaseStatisticsTest extends TestCase
{
    private Statistics $statistics;

    public function testMean(): void
    {
        self::assertEquals(2, $this->statistics->mean());
    }

    public function testMin(): void
    {
        self::assertEquals(1, $this->statistics->min());
    }

    public function testMax(): void
    {
        self::assertEquals(3, $this->statistics->max());
    }

    public function testSum(): void
    {
        self::assertEquals(18, $this->statistics->sum());
    }

    public function testCountAll(): void
    {
        self::assertEquals(9, $this->statistics->countAll());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->statistics = new BaseStatistics(
            [
                [1,2,3],
                [1,2,3],
                [1,2,3],
            ],
        );
    }
}
