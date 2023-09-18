<?php

namespace Gymers\PinganJzb\Responses;

class TraFinalStatusQueryResponse extends Response
{
    /**
     * @var string OldThirdSeqNo 原第三方流水号 string(64) Y
     * 原第三方流水号
    */
    public $OldThirdSeqNo = '';

    /**
     * @var string OldJzbAcceptSeqNo 原见证受理流水号 string(32) Y
     * 原见证受理流水号
    */
    public $OldJzbAcceptSeqNo = '';

    /**
     * @var string TranType 交易类型 string(8) Y
     * 6267-冻结充值；6268-冻结充值撤销；6269-补贴；6270-补贴撤销；6271-分账；6272-分账撤销
    */
    public $TranType = '';

    /**
     * @var string TranTotalAmt 交易总金额 string(20) Y
     * 总的交易金额
    */
    public $TranTotalAmt = '';

    /**
     * @var string TranStatus 交易状态 string(2) Y
     * 0-成功；1-失败；3-处理中
    */
    public $TranStatus = '';

    /**
     * @var string TranDealStatusCode 交易处理状态码 string(8) Y
     * 交易处理状态的错误码值
    */
    public $TranDealStatusCode = '';

    /**
     * @var string TranDealStatusDesc 交易处理状态描述 string(500) Y
     * 交易处理状态的错误描述
    */
    public $TranDealStatusDesc = '';

    /**
     * @var array TranItemArray 交易信息数组
     * START
     * ThirdHtId 分账订单号 string(64) N 分账订单的子订单号
     * END
    */
    public $TranItemArray = [];
}
