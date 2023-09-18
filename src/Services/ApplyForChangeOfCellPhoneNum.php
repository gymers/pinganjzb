<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6083
 * 申请修改手机号码
 *
 * 用于有需要进行短信动态码验证的平台，申请修改会员手机号码。
*/
class ApplyForChangeOfCellPhoneNum extends Service
{
    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) Y
    */
    public $TranNetMemberCode = '';

    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) Y
    */
    public $SubAcctNo = '';

    /**
     * @var string ModifyType 修改方式 string(2) Y
     * 1：短信验证码 2：银联鉴权
     * 修改方式说明：
     * 1- 短信验证码
     * 这种方式适合原手机还能接收到短信的。银行直接给原手机发短信，然后会员再回填收到的短信码，验证正确完成修改。
     * 2- 银联鉴权
     * 这种方式适合原手机已不能收到短信。银行会根据客户卡号，及提取后台已维护的证件信息、姓名，去验证新手机是否该银行卡的预留手机号码，
     * 确认客户身份后，给新号码发送动态码，回填成功完成修改。（这种方式只支持个人卡的修改）
    */
    public $ModifyType = '';

    /**
     * @var string NewMobile 新手机号码 string(12) Y
    */
    public $NewMobile = '';

    /**
     * @var string MobileLocation 手机号归属 string(10) N
     * 1：境内 2：境外
    */
    public $MobileLocation = '';

    /**
     * @var string BankCardNo 银行卡号 string(32) N
     * 当修改方式为2时必输。
    */
    public $BankCardNo = '';
}
