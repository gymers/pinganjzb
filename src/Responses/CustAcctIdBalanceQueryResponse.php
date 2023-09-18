<?php

namespace Gymers\PinganJzb\Responses;

class CustAcctIdBalanceQueryResponse extends Response
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
     * SubAcctNo 见证子账户的账号 string(32) 可重复
     * SubAcctProperty 见证子账户的属性 string(1) 可重复（1：普通会员子账号 2：挂账子账号  3：手续费子账号 4：利息子账号5：平台担保子账号 7：平台在途子账户 11：汇总影子子账户 12：提现在途子账户 13：营销子账户22：特殊挂账子账户（22类型如没有返回，则表示没有））
     * TranNetMemberCode 交易网会员代码 string(32) 可重复
     * SubAcctName 见证子账户的名称 string(120) 可重复
     * AcctAvailBal 见证子账户可用余额 string(15) 可重复
     * CashAmt 见证子账户可提现金额 string(15) 可重复
     * MaintenanceDate 维护日期 string(8) 可重复（开户日期或修改日期）
     * END
    */
    public $AcctArray = [];
}
