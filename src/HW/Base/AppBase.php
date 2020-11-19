<?php declare(strict_types=1);

namespace HW\Base;


class AppBase implements AppBaseInterface
{
    private $base;

    public function __construct($base)
    {
        $this->base = $base;
    }

    public function getBase()
    {
        return $this->base;
    }
}
