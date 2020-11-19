<?php declare(strict_types=1);

namespace Tests\HW\Base;


use PHPUnit\Framework\TestCase;
use HW\Base\AppBaseInterface;
use HW\Base\AppBase;


class AppBaseTest extends TestCase
{
    public function testInterface()
    {
        $ab = new AppBase("");
        $this->assertTrue($ab instanceof AppBaseInterface);
    }

    public function testGetBase()
    {
        $base = "base";
        $ab = new AppBase($base);
        $this->assertEquals($ab->getBase(), $base);
    }
}