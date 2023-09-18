<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6033
 * 会员提现-不验证
 *
 * 此接口受理会员发起的提现申请。会员子账户的可提现余额、可用余额会减少，市场的资金汇总账户(监管账户)会减少相应的发生金额，提现到会员申请的收款账户。
*/
class MembershipWithdrawCash extends Service
{
    /**
     * @var string TranWebName 交易网名称 string(120) Y
     * 请填写4位的市场代码
    */
    public $TranWebName = '';

    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) Y
    */
    public $SubAcctNo = '';

    /**
     * @var string MemberGlobalType 会员证件类型 string(2) N
     * 52:组织机构代码证 68:营业执照  73:统一社会信用代码 1:身份证 3:港澳台居民通行证（即回乡证） 4:中国护照 5:台湾居民来往大陆通行证（即台胞证） 19:外国护照
    */
    public $MemberGlobalType = '';

    /**
     * @var string MemberGlobalId 会员证件号码 string(20) N
    */
    public $MemberGlobalId = '';

    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) Y
    */
    public $TranNetMemberCode = '';

    /**
     * @var string MemberName 会员名称 string(120) Y
    */
    public $MemberName = '';

    /**
     * @var string TakeCashAcctNo 提现账号 string(32) Y
     * 银行卡
    */
    public $TakeCashAcctNo = '';

    /**
     * @var string OutAmtAcctName 提现账户户名 string(120) Y
     * 银行卡户名
    */
    public $OutAmtAcctName = '';

    /**
     * @var string Ccy 币种 string(3) Y
     * 默认为RMB
    */
    public $Ccy = '';

    /**
     * @var string CashAmt 可提现金额 string(15) Y
     * 不包含手续费，实际到账金额=申请提现的金额
    */
    public $CashAmt = '';

    /**
     * @var string TakeCashBatchNo 提现申请批次号 string(64) N
    */
    public $TakeCashBatchNo = '';

    /**
     * @var string OrderNo 订单号 string(30) N
    */
    public $OrderNo = '';

    /**
     * @var string TakeCashAcctType 提现账号类型 string(3) N
     * 1-会员绑定卡 2-合众支付卡 默认值为1
    */
    public $TakeCashAcctType = '';

    /**
     * @var string Remark 备注 string(120) N
     * 建议可送订单号，可在对账文件的备注字段获取到。
    */
    public $Remark = '';

    /**
     * @var string WebSign 网银签名 string(256) N
    */
    public $WebSign = '';
}
