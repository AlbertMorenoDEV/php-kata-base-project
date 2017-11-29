<?php

namespace Tests\Unit;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreateNewInstance()
    {
        $kata = new Kata();

        $this->assertInstanceOf(Kata::class, $kata);
    }
}
