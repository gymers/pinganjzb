<?php

namespace Gymers\PinganJzb\Responses;

class ApplyForChangeOfCellPhoneNumResponse extends Response
{
    /**
     * @var string ReceiveMobile 接收手机号码 string(12)
     * 短信码发到该手机上，银行只返回后四位。
    */
    public $ReceiveMobile = '';

    /**
     * @var string MessageOrderNo 短信指令号 string(32)
    */
    public $MessageOrderNo = '';
}
