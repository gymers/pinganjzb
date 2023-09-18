<?php

namespace Gymers\PinganJzb\Responses;

class RevokeOnWayTopThirdPaySplitResponse extends Response
{
    /**
     * @var string OrdersCount 订单数量 string(32) Y
    */
    public $OrdersCount = '';

    /**
     * @var array TranItemArray 信息数组
     * START
     * FrontSeqNo 前置流水号 string(16) N
     * END
    */
    public $TranItemArray = [];

    /**
     * @var string ReservedMsgOne 保留域1 string(120) N
    */
    public $ReservedMsgOne = '';

    /**
     * @var string ReservedMsgTwo 保留域2 string(120) N
    */
    public $ReservedMsgTwo = '';
}
