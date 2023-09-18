<?php

namespace Gymers\PinganJzb\Responses;

class QueryCustAcctIdBalanceResponse extends Response
{
    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32)
    */
    public $TranNetMemberCode = '';

    /**
     * @var string SubAcctAvailBal 见证子账户可用余额 string(15)
     * 1，当入参【保留域】为空时，查询子账户的可用余额和待支付或冻结的担保金额。
     * 2，当入参【保留域】为见证有效子账户时，查询【子账户账号】的可用余额和待支付或冻结的担保金额，且出参【保留域】返回入参【保留域】待支付给【子账户账号】的担保金额。（已废除）
     * 3，当入参【保留域】值为“SameAccount”时，查询子账户的可用余额（含其同名子账户，如有）和待支付或冻结的担保金额，且出参【保留域】返回其代收担保金额。
    */
    public $SubAcctAvailBal = '';

    /**
     * @var string SubAcctAssureAmt 见证子账户担保金额 string(15)
     * 指在担保子账户里待支付或冻结的金额
    */
    public $SubAcctAssureAmt = '';
}
