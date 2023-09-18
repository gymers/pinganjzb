<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6142
 * 查询明细单验证码
 *
 * 根据见证宝系统的交易流水号（前置流水号）查询其对应的明细单验证码
*/
class DetailVerifiedCodeQuery extends Service
{
    /**
     * @var string OldFrontSeqNo 原前置流水号 string(32) Y
    */
    public $OldFrontSeqNo = '';

    /**
     * @var string OldTranType 原交易类型 string(2) Y
     * 默认上送1-担保支付交易
    */
    public $OldTranType = '';
}
