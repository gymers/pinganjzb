<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6110
 * 查询银行单笔交易状态
 *
 * 查询单笔交易的状态
*/
class SingleTransactionStatusQuery extends Service
{
    /**
     * @var string FunctionFlag 功能标志 string(1) Y
     * 2：会员间交易
     * 3：提现
     * 4：充值
    */
    public $FunctionFlag = '';

    /**
     * @var string TranNetSeqNo 交易网流水号 string(22) Y
     * 提现，充值或会员交易请求时的CnsmrSeqNo值,6216分账时请求时的SubOrderBussSeqNo（如果6216没有送，就用返回的前置流水号FrontSeqNo）
    */
    public $TranNetSeqNo = '';

    /**
     * @var string SubAcctNo 见证子帐户的帐号 string(32) N
     * 未启用
    */
    public $SubAcctNo = '';

    /**
     * @var string TranDate 交易日期 string(8) N
     * 未启用
    */
    public $TranDate = '';
}
