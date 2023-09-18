<?php

namespace Gymers\PinganJzb\Responses;

class MemberRechargeThirdPayResponse extends Response
{
    /**
     * @var string FrontSeqNo 前置流水号 string(30) Y
    */
    public $FrontSeqNo = '';

    /**
     * @var string MemberSubAcctPreAvailBal 会员子账户交易前可用余额 string(15) N
    */
    public $MemberSubAcctPreAvailBal = '';

    /**
     * @var string ReservedMsgOne 保留域1 string(120) N
    */
    public $ReservedMsgOne = '';

    /**
     * @var string ReservedMsgTwo 保留域2 string(120) N
    */
    public $ReservedMsgTwo = '';
}
