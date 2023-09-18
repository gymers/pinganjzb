<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6061
 * 查询小额鉴权转账结果
 *
 * 查询小额往账鉴权的转账状态。
*/
class SmallAmountTransferQuery extends Service
{
    /**
     * @var string OldTranSeqNo 原交易流水号 string(20) Y
     * 小额鉴权交易请求时的CnsmrSeqNo值（第一次申请成功时的流水号）
    */
    public $OldTranSeqNo = '';

    /**
     * @var string TranDate 交易日期 string(8) Y
     * 格式：20181201
    */
    public $TranDate = '';
}
