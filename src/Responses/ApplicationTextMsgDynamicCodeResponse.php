<?php

namespace Gymers\PinganJzb\Responses;

class ApplicationTextMsgDynamicCodeResponse extends Response
{
    /**
     * @var string ReceiveMobile 接收手机号码 string(12)
    */
    public $ReceiveMobile = '';

    /**
     * @var string MessageOrderNo 短信指令号 string(32)
    */
    public $MessageOrderNo = '';
}
