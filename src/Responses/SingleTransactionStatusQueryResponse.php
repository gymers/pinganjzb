<?php

namespace Gymers\PinganJzb\Responses;

class SingleTransactionStatusQueryResponse extends Response
{
    /**
     * @var string BookingFlag 记账标志 string(1)
     * 记账标志（1：登记挂账 2：支付 3：提现 4：清分5:下单预支付 6：确认并付款 7：退款 8：支付到平台 N:其他）
    */
    public $BookingFlag = '';

    /**
     * @var string TranStatus 交易状态 string(1)
     * （0：成功，1：失败，2：待确认, 5：待处理，6：处理中）
     * 提示：若系统返回状态不为0或者1， 返回其他任何状态均为交易状态不明，5分钟后重新查询。
    */
    public $TranStatus = '';

    /**
     * @var string TranAmt 交易金额 string(15)
     * 包含手续费，即交易金额=实际到账金额+手续费
     * 根据查询条件返回的交易金额结果
    */
    public $TranAmt = '';

    /**
     * @var string TranDate 交易日期 string(8)
     * 根据查询条件返回的交易日期
    */
    public $TranDate = '';

    /**
     * @var string TranTime 交易时间 string(6)
     * 根据查询条件返回的交易时间
    */
    public $TranTime = '';

    /**
     * @var string InSubAcctNo 转入子账户账号 string(32)
    */
    public $InSubAcctNo = '';

    /**
     * @var string OutSubAcctNo 转出子账户账号 string(32)
    */
    public $OutSubAcctNo = '';

    /**
     * @var string FailMsg 失败信息 string(120)
     * 当提现失败时，返回交易失败原因
    */
    public $FailMsg = '';

    /**
     * @var string OldTranFrontSeqNo 原交易前置流水号 string(32)
    */
    public $OldTranFrontSeqNo = '';
}
