<?php

namespace Gymers\PinganJzb\Application;

class Config
{
    public $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->config)) {
            return $this->config[$name];
        }

        return null;
    }
}
