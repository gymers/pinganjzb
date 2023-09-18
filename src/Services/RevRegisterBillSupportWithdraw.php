<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6140
 * 登记挂账撤销
 *
 * 此接口可以实现把原6139指令完成的登记挂账进行撤销，即调减普通会员子账户的可提现和可用余额，调增挂账子账户的可用余额。
*/
class RevRegisterBillSupportWithdraw extends Service
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
     * @var string OldOrderNo 原订单号 string(30) Y
     * 原【6139】登记挂账的订单号
    */
    public $OldOrderNo = '';

    /**
     * @var string CancelAmt 撤销金额 string(15) Y
     * 支持部分撤销，不能大于原订单可用金额，包含交易费用，即撤销金额=实际会员到账的撤销金额+交易费用
    */
    public $CancelAmt = '';

    /**
     * @var string TranFee 交易费用 string(15) Y
     * 平台退给用户的手续费，不能超过原订单的手续费
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
