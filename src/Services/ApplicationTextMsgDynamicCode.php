<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6082
 * 申请提现或支付短信动态码
 *
 * 用于有需要进行短信动态码验证的平台，申请短信动态验证码，以便于【6085】、接口的交易进行短信动态码验证。
*/
class ApplicationTextMsgDynamicCode extends Service
{
    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) Y
     * 交易网会员代码即会员在平台端系统的会员编号，按批次号提现时非必输
    */
    public $TranNetMemberCode = '';

    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) Y
     * 系统生成的子帐号，按批次号提现时非必输.当所申请的短信验证码是用于进行6101接口的功能分支2或4或6或9的场景，须上送转出方的见证子账户的账号
    */
    public $SubAcctNo = '';

    /**
     * @var string TranType 交易类型 string(2) Y
     * 1：提现
     * 2：支付
     * 3：批次号支付
     * 4：批次号作废
    */
    public $TranType = '';

    /**
     * @var string TranAmt 交易金额 string(15) Y
     * 按批次号提现时非必输
    */
    public $TranAmt = '';

    /**
     * @var string BankCardNo 银行卡号 string(32) N
    */
    public $BankCardNo = '';

    /**
     * @var string OrderNo 订单号 string(30) N
     * 按批次号提现时，此字段必须，上送批次号字段
    */
    public $OrderNo = '';

    /**
     * @var string Remark 备注 string(120) N
     * 当所申请的短信验证码是用于进行6101接口的功能分支2或4或6或9的场景，须上送转入方的见证子账户的账号
    */
    public $Remark = '';
}
