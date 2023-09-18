<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6139
 * 登记挂账(支持撤销)
 *
 * 此接口可实现把不明来账或自有资金等已登记在挂账子账户下的资金调整到普通会员子账户。即通过申请调用此接口，将会减少挂账子账户的资金，调增指定的普通会员子账户的可提现余额及可用余额。
 * 此接口不支持把挂账子账户资金清分到功能子账户（营销子账户除外）。
*/
class RegisterBillSupportWithdraw extends Service
{
    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) Y
    */
    public $SubAcctNo = '';

    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) Y
    */
    public $TranNetMemberCode = '';

    /**
     * @var string OrderNo 订单号 string(30) Y
     * 全局唯一
    */
    public $OrderNo = '';

    /**
     * @var string SuspendAmt 挂账金额 string(15) Y
     * 包含交易费用，即挂账金额=会员实际到账金额+交易费用
    */
    public $SuspendAmt = '';

    /**
     * @var string TranFee 交易费用 string(15) Y
     * 平台收取用户的费用
    */
    public $TranFee = '';

    /**
     * @var string Remark 备注 string(120) N
    */
    public $Remark = '';

    /**
     * @var string ReservedMsgOne 保留域1 string(120) N
    */
    public $ReservedMsgOne = '';

    /**
     * @var string ReservedMsgTwo 保留域2 string(120) N
    */
    public $ReservedMsgTwo = '';

    /**
     * @var string ReservedMsgThree 保留域3 string(120) N
    */
    public $ReservedMsgThree = '';
}
