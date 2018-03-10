<?php

namespace Tests\Unit;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreateNewInstance(): void
    {
        $kata = new Kata();

        $this->assertInstanceOf(Kata::class, $kata);
    }
}
