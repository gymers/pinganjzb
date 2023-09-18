<?php

namespace Gymers\PinganJzb\Responses;

class CommonTransferRechargeQueryResponse extends Response
{
    /**
     * @var string ResultNum 本次交易返回查询结果记录数 string(8)
    */
    public $ResultNum = '';

    /**
     * @var string StartRecordNo 起始记录号 string(8)
    */
    public $StartRecordNo = '';

    /**
     * @var string EndFlag 结束标志 string(1)
     * 0：否  1：是
    */
    public $EndFlag = '';

    /**
     * @var string TotalNum 符合业务查询条件的记录总数 string(4)
     * 重复次数（一次最多返回20条记录）
    */
    public $TotalNum = '';

    /**
     * @var array TranItemArray 交易信息数组
     * START
     * InAcctType 入账类型 string(1) 02：会员充值/退票入账 03：资金挂账
     * TranNetMemberCode 交易网会员代码 string(32)
     * SubAcctNo 见证子帐户的帐号 string(32)
     * TranAmt 入金金额 string(15)
     * InAcctNo 入金账号 string(32)
     * InAcctName 入金账户名称 string(120)
     * Ccy 币种 string(3)
     * AccountingDate 会计日期 string(8) 即银行主机记账日期
     * BankName 银行名称 string(120) 付款账户银行名称
     * Remark 转账备注 string(120)
     * FrontSeqNo 见证系统流水号 string(16)
     * END
    */
    public $TranItemArray = [];
}
