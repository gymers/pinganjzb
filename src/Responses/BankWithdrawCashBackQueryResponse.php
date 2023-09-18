<?php

namespace Gymers\PinganJzb\Responses;

class BankWithdrawCashBackQueryResponse extends Response
{
    /**
     * @var string ResultNum 本次交易返回查询结果记录数 string(8)
    */
    public $ResultNum = '';

    /**
     * @var array TranItemArray 交易信息数组
     * START
     * OldTranSeqNo 原提现的交易流水号 string(30) 说明：退票日期为查询日当天的情况下该字段为空 427098+提现交易返回的前置流水号
     * OldFrontSeqNo 原提现的见证系统流水号 string(16) 说明：退票日期为查询日当天的情况下该字段为空
     * OldMarketSeqNo 原提现的市场流水号 string(32) 说明：退票日期为查询日当天的情况下该字段为空 公共报文头中的交易流水号
     * OldAddMsg 原提现的附言信息 string(120) 说明：退票日期为查询日当天的情况下该字段为空
     * RejectBillReason 退票原因 string(120)
     * RejectBillDate 退票日期 string(8) YYYYMMDD
     * RejectInAcctTranSeqNo 退票入账的交易流水号 string(32)
     * RejectInAcctTranAmt 退票入账的交易金额 string(30) 元为单元，保留2位小数
     * RejectInPayerAcctNo 退票入账的付款账号 string(50)
     * RejectInPayerAcctName 退票入账的付款户名 string(50)
     * RejectInPayerBranchId 退票入账的付款方行号 string(50)
     * RejectInPayerBranchName 退票入账的付款方行名 string(50)
     * PayeeWitnessSubAcctNo 退票入账的收款方见证子账户 string(20)
     * PayeeFrontSeqNo 退票入账的收款方见证系统流水号 string(16)
     * ReservedMsgOne 保留域1 string(100) 小额鉴权退票返回退票入账业务流水号或提现退票入账核心流水号
     * ReservedMsgTwo 保留域2 string(100)
     * ReservedMsgThree 保留域3 string(100)
     * END
    */
    public $TranItemArray = [];
}
