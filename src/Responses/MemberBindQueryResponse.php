<?php

namespace Gymers\PinganJzb\Responses;

class MemberBindQueryResponse extends Response
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
     * FundSummaryAcctNo 资金汇总账号 string(32)
     * SubAcctNo 见证子账户的账号 string(32)
     * TranNetMemberCode 交易网会员代码 string(32)
     * MemberName 会员名称 string(120)
     * MemberGlobalType 会员证件类型 string(2) 见“会员接口证件类型说明”例如身份证，送1。
     * MemberGlobalId 会员证件号码 string(20)
     * MemberAcctNo 会员绑定账户的账号 string(32) 提现的银行卡
     * BankType 会员绑定账户的本他行类型 string(1) 1：本行 2：他行
     * AcctOpenBranchName 会员绑定账户的开户行名称 string(120)
     * CnapsBranchId 会员绑定账户的开户行的联行号 string(14)
     * EiconBankBranchId 会员绑定账户的开户行的超级网银行号 string(14)
     * Mobile 会员的手机号 string(12)
     * END
    */
    public $TranItemArray = [];
}
