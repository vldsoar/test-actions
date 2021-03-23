<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testExample(): void
    {
        $this->assertSame(1, 1);
    }

    public function testExample1(): void
    {
        $this->assertSame(1, '5');
    }
}
