<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6239
 * 银联鉴权回填短信码-校验法人
 *
 * 与会员绑定提现账户银联鉴权-校验法人【6238】一起搭配使用
*/
class CheckMsgCodeWithCorp extends Service
{
    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) 必输
     * 交易网会员代码即会员在平台端系统的会员编号若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的交易网代码，并且须用“|::|”（右侧）进行分隔。
    */
    public $TranNetMemberCode = '';

    /**
     * @var string SubAcctNo 子账户账号 string(32) 必输
     * 系统返回的子账户帐号若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的子账户账号，并且须用“|::|”（右侧）进行分隔。
    */
    public $SubAcctNo = '';

    /**
     * @var string MemberAcctNo 会员账号 string(32) 必输
     * 提现的银行卡
    */
    public $MemberAcctNo = '';

    /**
     * @var string MessageCheckCode 短信验证码  string(7) 必输
     *  测试环境随便送6位数字生产环境根据提供的手机号，发送验证码到相应的手机号进行回填校验
    */
    public $MessageCheckCode = '';
}
