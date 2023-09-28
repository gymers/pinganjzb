<?php

namespace Gymers\PinganJzb\Exceptions;

class ResponseException extends \Exception
{
    public function __construct($message)
    {
        parent::__construct('Invalid Response:' . $message, 401);
    }
}
