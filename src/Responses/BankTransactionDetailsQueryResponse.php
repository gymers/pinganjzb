<?php

namespace Gymers\PinganJzb\Responses;

class BankTransactionDetailsQueryResponse extends Response
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
     * BookingFlag 记账标志 string(1) 1：转出 2：转入
     * TranStatus 交易状态 string(1) 0：成功
     * TranAmt 交易金额 string(15) 包含手续费，即交易金额=实际到账金额+手续费
     * TranDate 交易日期 string(8)
     * TranTime 交易时间 string(6)
     * FrontSeqNo 见证系统流水号 string(16)
     * BookingType 记账类型 string(1) 1：会员支付（6034-6/9分支;6101-6/9分支；6006-6/9分支） 2：会员冻结（6007-1/5分支；6135-1/5分支；6134-1/5分支） 3：会员解冻 （6007-2/6分支；6135-2/6分支；6134-2/6分支） 4：登记挂账（6139） 6：下单预支付 （6034-1分支；6101-1分支；6006-1分支） 7：确认并付款 （6034-2分支；6101-2分支；6006-2分支；6163；6166；6165） 8：会员退款 （6034-3分支；6101-3分支；6006-3分支） 22：见证+收单平台调账（6145） 23：见证+收单资金冻结  (Note字段放:见证+收单资金冻结,订单号) 24：见证+收单资金解冻（6007-4分支；6135-4分支；6134-4分支） 25：会员间交易退款（6164） 33：在途充值解冻(6007-7分支)
     * InSubAcctNo 转入见证子账户的帐号 string(32)
     * OutSubAcctNo 转出见证子账户的帐号 string(32)
     * Remark 备注 string(120) 如果是见证+收单的交易，返回交易订单号
     * END
    */
    public $TranItemArray = [];
}
