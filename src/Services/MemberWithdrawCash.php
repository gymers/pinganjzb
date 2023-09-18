<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6085
 * 会员提现-支持手续费
 *
 * 此接口受理会员发起的提现申请。会员子账户的可提现余额、可用余额会减少，市场的资金汇总账户(监管账户)会减少相应的发生金额，提现到会员申请的收款账户。
 * 与【6033】接口相比，此接口可以支持市场收取会员的提现申请交易的手续费，可以支持通过短信验证码验证会员发起的提现申请的真实性。
*/
class MemberWithdrawCash extends Service
{
    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) Y
     * 会员的见证子账户的账号
    */
    public $SubAcctNo = '';

    /**
     * @var string TranNetMemberCode 市场的会员代码 string(32) Y
    */
    public $TranNetMemberCode = '';

    /**
     * @var string SubAcctName 见证子账户的户名 string(120) Y
     * 会员留存在电商见证宝系统的户名
    */
    public $SubAcctName = '';

    /**
     * @var string TakeCashAcctNo 收款账户的账号 string(32) Y
    */
    public $TakeCashAcctNo = '';

    /**
     * @var string TakeCashAcctName 收款账户的户名 string(120) Y
    */
    public $TakeCashAcctName = '';

    /**
     * @var string Ccy 币种 string(3) Y
     * 默认为RMB
    */
    public $Ccy = '';

    /**
     * @var string CashAmt 申请提现的金额 string(15) Y
     * 不包含手续费，实际到账金额=申请提现的金额
    */
    public $CashAmt = '';

    /**
     * @var string TakeCashCommission 市场收取的手续费 string(15) Y
     * 此为市场收取的手续费，会入账到市场的手续费子账户。须保留两位小数。
    */
    public $TakeCashCommission = '';

    /**
     * @var string MessageOrderNo 短信验证码指令号 string(32) N
     * 当使用短信验证码验证时，必输 6082接口返回的MessageOrderNo字段值
    */
    public $MessageOrderNo = '';

    /**
     * @var string MessageCheckCode 短信验证码 string(7) N
     * 当使用短信验证码验证时，必输 测试环境当前不校验，随便输入6位数字即可
    */
    public $MessageCheckCode = '';

    /**
     * @var string Remark 备注 string(120) N
     * 此栏位内容会作为提现交易的附言信息
    */
    public $Remark = '';

    /**
     * @var string WebSign 网银签名 string(256) N
    */
    public $WebSign = '';
}
