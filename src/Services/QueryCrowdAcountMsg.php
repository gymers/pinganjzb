<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6292
 * 订单冻结余额查询
 *
 * 订单冻结余额查询
*/
class QueryCrowdAcountMsg extends Service
{
    /**
     * @var string OldPayBussOrderNo 原支付业务订单号 string(64) Y
     * 原支付场景生成的业务订单号
    */
    public $OldPayBussOrderNo = '';

    /**
     * @var string ReservedMsgOne 保留域1 string(120) N
    */
    public $ReservedMsgOne = '';

    /**
     * @var string ReservedMsgTwo 保留域2 string(120) N
    */
    public $ReservedMsgTwo = '';
}
