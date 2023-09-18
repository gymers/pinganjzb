<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6084
 * 回填动态码-修改手机
 *
 * 用于申请修改手机号码的会员，回填手机动态码发送至银行
*/
class BackfillDynamicPassword extends Service
{
    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) Y
     * 交易网会员代码即会员在平台端系统的会员编号
    */
    public $TranNetMemberCode = '';

    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) Y
     * 系统生成的子帐号
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
     * @var string MessageOrderNo 短信指令号 string(32) Y
     * 需与申请短信码时一致。
    */
    public $MessageOrderNo = '';

    /**
     * @var string MessageCheckCode 短信验证码 string(7) Y
     * 查询短信码
    */
    public $MessageCheckCode = '';
}
