<?php

declare(strict_types=1);

namespace Elephant\Matrix\Tests\Unit;

use Elephant\Matrix\MyClass;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Elephant\Matrix\MyClass
 */
class MyClassTest extends TestCase
{
    public function testMethod(): void
    {
        $myClass = new MyClass();

        self::assertEquals('Hello world', $myClass->method());
    }
}
