<?php

namespace Gymers\PinganJzb\Responses;

class MembershipWithdrawCashResponse extends Response
{
    /**
     * @var string FrontSeqNo 见证系统流水号 string(16)
    */
    public $FrontSeqNo = '';

    /**
     * @var string TransferFee 转账手续费 string(15)
     * 固定返回0.00
    */
    public $TransferFee = '';
}
