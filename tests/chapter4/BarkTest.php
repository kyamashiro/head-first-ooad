<?php


use Chapter4\Bark;
use PHPUnit\Framework\TestCase;

class BarkTest extends TestCase
{
    public function test_equals()
    {
        $bark = new Bark('bow');
        $other_bark = new Bark('wow');

        $this->assertEquals(false, $bark->equals($other_bark));
        $this->assertEquals(true, $bark->equals($bark));
    }
}
