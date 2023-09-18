<?php

namespace Gymers\PinganJzb\Responses;

class PlatformAccountSupplyResponse extends Response
{
    /**
     * @var string FrontSeqNo 见证系统流水号 string(16)
    */
    public $FrontSeqNo = '';

    /**
     * @var string SubAcctNo 见证子账户的账号 string(32)
    */
    public $SubAcctNo = '';

    /**
     * @var string Amt 金额 string(15)
    */
    public $Amt = '';

    /**
     * @var string Remark 备注 string(120)
    */
    public $Remark = '';
}
