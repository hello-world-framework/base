<?php declare(strict_types=1);

namespace Instantiators\Base;


use RS\Instantiator\AbstractInstantiator;
use HW\Base\AppBaseInterface;
use HW\Base\AppBase;


class AppBaseInstantiator extends AbstractInstantiator
{
    private static $base;

    public static function setBase($base)
    {
        if(self::$base !== null) {
            throw new \Exception(
                "App base is already set and it can be set only once."
            );
        }
        self::$base = $base;
    }

    public static function getBase()
    {
        return self::$base;
    }

    protected function register()
    {
        if(self::$base === null) {
            throw new \Exception(
                "AppBase not set. Set app base first to get AppBase object."
            );
        }

        $this->singleton([
            "default" => function() {
                return new AppBase(self::$base);
            }
        ]);
    }

    public function get(): AppBaseInterface
    {
        return $this->getInstance();
    }
}