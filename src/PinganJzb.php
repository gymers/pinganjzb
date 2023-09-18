<?php

namespace Gymers\PinganJzb;

use Gymers\PinganJzb\Application\Application;
use Gymers\PinganJzb\Application\Config;

class PinganJzb
{
    public static function config($config)
    {
        return new Application(new Config($config));
    }
}
