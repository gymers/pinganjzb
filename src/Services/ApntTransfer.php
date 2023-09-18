<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6211
 * 指定转账划款（测试专用，不能投产）
 *
 * 该接口从固定的一个账户支取，向指定的账户（输入的收款账户支持绑定卡、监管户或智能收款子账户）中转入指定的金额，该接口只能在测试环境使用。
*/
class ApntTransfer extends Service
{
    /**
     * @var string RecvAcctNo 收款账户的账号 string(32) Y
     * 收款账户的账号（见证子账户绑定的银行卡账户）
    */
    public $RecvAcctNo = '';

    /**
     * @var string RecvAcctName 收款账户的户名 string(120) N
     * 收款账户的户名
    */
    public $RecvAcctName = '';

    /**
     * @var string RecvAcctOpenBranchName 收款账户的开户行行名 string(100) N
     * 收款账户的开户行行名
    */
    public $RecvAcctOpenBranchName = '';

    /**
     * @var string RecvAcctOpenBranchInterbankId 收款账户的联行号 string(20) N
     * 收款账户的联行号
    */
    public $RecvAcctOpenBranchInterbankId = '';

    /**
     * @var string ApplyTakeCashAmt 申请提现的金额 string(15) Y
     * 须保留两位小数
    */
    public $ApplyTakeCashAmt = '';

    /**
     * @var string MarketChargeCommission 市场收取的手续费 string(15) Y
     * 未启用，须送值 0.00
    */
    public $MarketChargeCommission = '';

    /**
     * @var string Remark 备注 string(120) N
     * 此栏位内容会作为提现交易的附言信息，若未上送则后台自动补全为该笔转账申请的第三方交易流水号
    */
    public $Remark = '';

    /**
     * @var string HoldOne 预留字段1 string(120) N
    */
    public $HoldOne = '';

    /**
     * @var string HoldTwo 预留字段2 string(120) N
    */
    public $HoldTwo = '';

    /**
     * @var string HoldThree 预留字段3 string(120) N
    */
    public $HoldThree = '';
}
