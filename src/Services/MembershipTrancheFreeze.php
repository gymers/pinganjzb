<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6007
 * 会员资金冻结-不验证
 *
 * 本接口可以实现减少会员的余额，增加市场的担保子账户的余额。资金从会员子账户划转到担保子账户后，可用于支付到其他的会员子账户或被解冻退回。
 * 跟“【6034】会员间交易”相比，进行会员资金冻结的操作，不须要明确最终的收款方信息。
 * 4：见证+收单的解冻：支持部分解冻，这里的手续费指的是要解冻的原云收款订单中的手续费，不是解冻收取的手续费；
 * 7：在途充值解冻是对6216接口的解冻，仅支持全额解冻，不能部分解冻，这里的手续费是6007解冻收取的手续费
*/
class MembershipTrancheFreeze extends Service
{
    /**
     * @var string FunctionFlag 功能标志 string(1) Y
     * 1：冻结（会员→担保）
     * 2：解冻（担保→会员）
     * 4：见证+收单的冻结资金解冻
     * 5: 可提现冻结（会员→担保）
     * 6: 可提现解冻（担保→会员）
     * 7: 在途充值解冻（担保→会员）
    */
    public $FunctionFlag = '';

    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) Y
    */
    public $SubAcctNo = '';

    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) Y
    */
    public $TranNetMemberCode = '';

    /**
     * @var string ConsumeAmt 消费金额 string(15) N
     * 订单的消费金额
    */
    public $ConsumeAmt = '';

    /**
     * @var string TranAmt 交易金额 string(15) Y
     * 需解冻/冻结的金额，包含手续费，即交易金额=实际解冻到账金额+手续费
    */
    public $TranAmt = '';

    /**
     * @var string TranCommission 交易手续费 string(15) Y
     * 解冻时，将根据该金额收取手续费，若无手续费则送0。冻结时，改字段不启用
    */
    public $TranCommission = '';

    /**
     * @var string Ccy 币种 string(3) Y
     * RMB
    */
    public $Ccy = '';

    /**
     * @var string OrderNo 订单号 string(30) Y
     * 全局唯一，不能与6034/6101/6006/6139订单号相同。如果是解冻，需要送冻结时送的子订单号或订单号
    */
    public $OrderNo = '';

    /**
     * @var string OrderContent 订单内容 string(500) N
    */
    public $OrderContent = '';

    /**
     * @var string Remark 备注 string(120) N
    */
    public $Remark = '';
}
