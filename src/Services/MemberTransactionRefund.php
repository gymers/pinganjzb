<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6164
 * 会员间交易退款-不验证
 *
 * 用于会员间交易做售后退款处理。从卖方子账户扣退款金额（不含退款手续费），如退手续费金额大于0，则从退款垫款户（默认为平台自有一般账户）扣该退手续费金额，
 * 支付给买方子账户可用金额（T+1日变为可提现）。
*/
class MemberTransactionRefund extends Service
{
    /**
     * @var string FunctionFlag 功能标志 string(1) Y
     * 2：会员交易接口【直接支付】退款 针对【6006/6034/6101】funcflag=6、9-直接支付的退款
    */
    public $FunctionFlag = '';

    /**
     * @var string OldTranSeqNo 原交易流水号 string(20) Y
    */
    public $OldTranSeqNo = '';

    /**
     * @var string OldOutSubAcctNo 原转出见证子账户的帐号 string(32) Y
    */
    public $OldOutSubAcctNo = '';

    /**
     * @var string OldOutMemberCode 原转出会员代码 string(32) Y
    */
    public $OldOutMemberCode = '';

    /**
     * @var string OldInSubAcctNo 原转入见证子账户的账号 string(32) Y
    */
    public $OldInSubAcctNo = '';

    /**
     * @var string OldInMemberCode 原转入会员代码 string(32) Y
    */
    public $OldInMemberCode = '';

    /**
     * @var string OldOrderNo 原订单号 string(30) N
    */
    public $OldOrderNo = '';

    /**
     * @var string ReturnAmt 退款金额 string(15) Y
     * 包含退款手续费
    */
    public $ReturnAmt = '';

    /**
     * @var string ReturnCommission 退款手续费 string(15) Y
     * 6分支填0.0
    */
    public $ReturnCommission = '';

    /**
     * @var string Remark 备注 string(120) N
    */
    public $Remark = '';
}
