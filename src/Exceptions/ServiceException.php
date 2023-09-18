<?php

namespace Gymers\PinganJzb\Exceptions;

class ServiceException extends \Exception
{
    public function __construct($message)
    {
        parent::__construct('Invalid Service:'.$message, 401);
    }
}
