<?php

namespace Gymers\PinganJzb\Responses;

class CustAcctIdHistoryBalanceQueryResponse extends Response
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
     * @var array AcctArray 账户信息数组
     * START
     * Date 日期 string(6) 格式：yymmdd
     * DayAcctAvailBal 日终可用余额 string(15)
     * DayCashBal 日终可提现余额 string(15)
     * DayFreezeBal 日终冻结余额 string(15)
     * DayCashOccurAmt 当日待转可提现发生额 string(15)
     * DayWaitCashBal 日终待转可提现余额 string(15)
     * CashStatus 待转可提现状态 string(1) 0：待转 1：已转 2：无需转 3：异常
     * END
    */
    public $AcctArray = [];
}
