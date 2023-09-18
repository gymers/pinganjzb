<?php

namespace Gymers\PinganJzb\Responses;

class OnWayTopThirdPaySplitResponse extends Response
{
    /**
     * @var string OrdersCount 订单数量 string(4) Y
    */
    public $OrdersCount = '';

    /**
     * @var array TranItemArray 信息数组
     * START
     * FrontSeqNo 前置流水号 string(16) Y 即电商见证宝系统生成的流水号，可关联具体一笔请求
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
