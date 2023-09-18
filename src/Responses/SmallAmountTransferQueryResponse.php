<?php

namespace Gymers\PinganJzb\Responses;

class SmallAmountTransferQueryResponse extends Response
{
    /**
     * @var string ReturnStatu 返回状态 string(1)
     * (0：成功，1：失败，2：待确认) 当返回2：待确认时，说明平安银行已转账成功，但是收款账户还未收到资金
    */
    public $ReturnStatu = '';

    /**
     * @var string ReturnMsg 返回信息 string(80)
     * 失败返回具体信息
    */
    public $ReturnMsg = '';
}
