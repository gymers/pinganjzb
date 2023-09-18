<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6135
 * 会员资金冻结-验证短信动态码
 *
 * 冻结的意思是减少会员子账户的资金，增加担保子账户的资金。担保子账户增加的这部分资金后续可用于支付到别的子账户或解冻退回到会员子账户。使用短信验证。
 * 跟会员间交易【6101】的区别在于，进行冻结时，是没有指定收款方的。
*/
class MbrTchFrzVerifiedTextMsgs extends Service
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

    /**
     * @var string MessageOrderNo 短信指令号 string(32) N
     * 当使用短信验证时，必输
    */
    public $MessageOrderNo = '';

    /**
     * @var string MessageCheckCode 短信验证码 string(7) Y
     * 测试环境当前不校验，随便输入6位数字即可
    */
    public $MessageCheckCode = '';
}
