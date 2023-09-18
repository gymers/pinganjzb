<?php

namespace Gymers\PinganJzb\Responses;

class RevokeMemberRechargeThirdPayResponse extends Response
{
    /**
     * @var string FrontSeqNo 前置流水号 string(30) Y
    */
    public $FrontSeqNo = '';

    /**
     * @var string ReservedMsgOne 保留域1 string(120) N
    */
    public $ReservedMsgOne = '';

    /**
     * @var string ReservedMsgTwo 保留域2 string(120) N
    */
    public $ReservedMsgTwo = '';
}
