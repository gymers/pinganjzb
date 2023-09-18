<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6034
 * 会员间交易-不验证
 *
 * 此接口可以实现会员间的余额的交易，实现资金在会员之间流动（目前仅使用于营销子账号和商户子账号之间的转账）。
*/
class MemberTransaction extends Service
{
    /**
     * @var string FunctionFlag 功能标志 string(1) Y
     * 6：直接支付T+1
     * 9：直接支付T+0
    */
    public $FunctionFlag = '';

    /**
     * @var string OutSubAcctNo 转出方的见证子账户的账号 string(32) Y
     * 营销子账号
    */
    public $OutSubAcctNo = '';

    /**
     * @var string OutMemberCode 转出方的交易网会员代码 string(32) Y
    */
    public $OutMemberCode = '';

    /**
     * @var string OutSubAcctName 转出方的见证子账户的户名 string(120) N
     * 营销子账号
    */
    public $OutSubAcctName = '';

    /**
     * @var string InSubAcctNo 转入方的见证子账户的账号 string(32) Y
     * 收款方
    */
    public $InSubAcctNo = '';

    /**
     * @var string InMemberCode 转入方的交易网会员代码 string(32) Y
    */
    public $InMemberCode = '';

    /**
     * @var string InSubAcctName 转入方的见证子账户的户名 string(120) N
     * 户名就送开户接口AutonymOpenCustAcctId接口上送的用户MemberName会员名称
    */
    public $InSubAcctName = '';

    /**
     * @var string TranAmt 交易金额 string(15) Y
     * 包含交易费用，会员的实际到账金额=交易金额-交易费用
    */
    public $TranAmt = '';

    /**
     * @var string TranFee 交易费用 string(15) Y
     * 平台收取交易费用
    */
    public $TranFee = '';

    /**
     * @var string TranType 交易类型 string(2) Y
     * 01：普通交易
    */
    public $TranType = '';

    /**
     * @var string Ccy 币种 string(3) Y
     * 默认：RMB
    */
    public $Ccy = '';

    /**
     * @var string OrderNo 订单号 string(30) N
    */
    public $OrderNo = '';

    /**
     * @var string OrderContent 订单内容 string(500) N
    */
    public $OrderContent = '';

    /**
     * @var string Remark 备注 string(120) N
     * 建议可送订单号，可在对账文件的备注字段获取到。
    */
    public $Remark = '';

    /**
     * @var string WebSign 网银签名 string(256) N
     * 若需短信验证码则此项必输
    */
    public $WebSign = '';
}
