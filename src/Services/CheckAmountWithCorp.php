<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6241
 * 小额鉴权回填金额-校验法人
 *
 * 此接口是小额转账鉴权【6240】的配套接口，用于验证鉴权是否成功
 * 与会员绑定提现账户小额鉴权-校验法人【6240】一起搭配使用，回填金额应为两位小数，客户回填的金额平台应对格式进行校验，超过两位小数或者大于0.5的应给客户提示，如格式不正确或大于随机转入金额等
*/
class CheckAmountWithCorp extends Service
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
     * @var string TakeCashAcctNo 提现账号 string(32) 必输
     * 提现的银行卡
    */
    public $TakeCashAcctNo = '';

    /**
     * @var string AuthAmt 鉴权金额 string(15) 必输
     * 原小额转账鉴权方式为来账鉴权的情况下此字段须赋值为0.00
    */
    public $AuthAmt = '';

    /**
     * @var string OrderNo 指令号 string(5) 必输
     * 生产环境根据提供的手机号，发送序列号到相应的手机号进行回填校验
     * 申请小额鉴权有上送经办人的，指令号会发到经办人手机号，未输入的经办人的发到Mobile
    */
    public $OrderNo = '';

    /**
     * @var string Ccy 币种 string(3) 必输
     * 默认为RMB
    */
    public $Ccy = '';
}
