<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6065
 * 会员解绑提现账户
 *
 * 此接口可以支持会员解除名下的绑定账户关系
*/
class UnbindRelateAcct extends Service
{
    /**
     * @var string FunctionFlag 功能标志 string(1) Y
     * 1：解绑
    */
    public $FunctionFlag = '';

    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) Y
     * 若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的交易网代码，并且须用“|::|”(右侧)进行分隔。
    */
    public $TranNetMemberCode = '';

    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) Y
     * 若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的子账户账号，并且须用“|::|”(右侧)进行分隔。
    */
    public $SubAcctNo = '';

    /**
     * @var string MemberAcctNo 待解绑的提现账户的账号 string(32) Y
     * 提现账号
    */
    public $MemberAcctNo = '';
}
