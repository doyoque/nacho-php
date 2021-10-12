<?php

use Doyoque\Nacho\Nacho;
use PHPUnit\Framework\TestCase;

class NachoTest extends TestCase
{
    /** @test */
    public function nacho_has_cheese()
    {
        $nacho = new Nacho();
        $this->assertTrue($nacho->hasCheese());
    }
}

