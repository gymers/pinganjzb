<?php

namespace Gymers\PinganJzb\Responses;

class ChargeDetailQueryResponse extends Response
{
    /**
     * @var string TranStatus 交易状态 string(1)
     * （0：成功，1：失败，2：异常,3:冲正，5：待处理）
    */
    public $TranStatus = '';

    /**
     * @var string TranAmt 交易金额 string(15)
    */
    public $TranAmt = '';

    /**
     * @var string CommissionAmt 佣金费 string(15)
    */
    public $CommissionAmt = '';

    /**
     * @var string PayMode 支付方式 string(1)
     * 0-冻结支付 1-普通支付
    */
    public $PayMode = '';

    /**
     * @var string TranDate 交易日期 string(8)
    */
    public $TranDate = '';

    /**
     * @var string TranTime 交易时间 string(6)
    */
    public $TranTime = '';

    /**
     * @var string OrderInSubAcctNo 订单转入见证子账户的帐号 string(32)
    */
    public $OrderInSubAcctNo = '';

    /**
     * @var string OrderInSubAcctName 订单转入见证子账户的名称 string(120)
    */
    public $OrderInSubAcctName = '';

    /**
     * @var string OrderActInSubAcctNo 订单实际转入见证子账户的帐号 string(32)
    */
    public $OrderActInSubAcctNo = '';

    /**
     * @var string OrderActInSubAcctName 订单实际转入见证子账户的名称 string(120)
    */
    public $OrderActInSubAcctName = '';

    /**
     * @var string FrontSeqNo 见证系统流水号 string(16)
    */
    public $FrontSeqNo = '';

    /**
     * @var string TranDesc 交易描述 string(120)
     * 当充值失败时，返回交易失败原因
    */
    public $TranDesc = '';
}
