<?php declare(strict_types=1);

namespace Tests\Instantiators\Base;


use PHPUnit\Framework\TestCase;
use RS\Instantiator\AbstractInstantiator;
use Instantiators\Base\AppBaseInstantiator;
use HW\Base\AppBaseInterface;


class AppBaseInstantiatorTest extends TestCase
{
    public function testInterface()
    {
        $abi = new AppBaseInstantiator();
        $this->assertTrue($abi instanceof AbstractInstantiator);
    }

    public function testAppBaseObject()
    {
        $base ="base";
        AppBaseInstantiator::setBase($base);
        $abi = new AppBaseInstantiator();
        $ab = $abi->get();
        $this->assertTrue($ab instanceof AppBaseInterface);
        $this->assertEquals($ab->getBase(), $base);
    }
}