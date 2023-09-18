<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6093
 * 查询会员子账号余额
 *
 * 1，当入参【保留域】为空时，查询子账户的可用余额和待支付或冻结的担保金额。
 * 2，当入参【保留域】为见证有效子账户时，查询【子账户账号】的可用余额和待支付或冻结的担保金额，且出参【保留域】返回入参【保留域】待支付给【子账户账号】的担保金额。（已废除）
 * 3，当入参【保留域】值为“SameAccount”时，查询子账户的可用余额（含其同名子账户，如有）和待支付或冻结的担保金额，且出参【保留域】返回其代收担保金额。
*/
class QueryCustAcctIdBalance extends Service
{
    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) Y
    */
    public $SubAcctNo = '';
}
