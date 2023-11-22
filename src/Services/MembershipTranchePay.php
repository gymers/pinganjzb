<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6163
 * 会员资金支付-不验证
 *
 * 见证+收单模式，若前一日存在子账户记账失败的情况(如平台上送子钱包信息错误)，对应清算资金挂在快收专属子账户，
 * 平台核实资金归属后，调用该接口，将资金清分到具体的会员子账户。(需要关联原资金流水)
*/
class MembershipTranchePay extends Service
{
    /**
     * @var string OutSubAcctNo 转出见证子账户的账号 STRING(50) Y
    */
    public $OutSubAcctNo = '';

    /**
     * @var string OutTranNetMemberCode	转出交易网会员代码 STRING(32) Y
    */
    public $OutTranNetMemberCode = '';

    /**
     * @var string Commission 手续费 STRING(20) Y
     * 归于平台的收益
    */
    public $Commission = '';

    /**
     * @var string Ccy 币种 STRING(3) Y
     * RMB
    */
    public $Ccy = '';

    /**
     * @var string OrderNo 订单号 STRING(50) Y
    */
    public $OrderNo = '';

    /**
     * @var string InSubAcctNum 转入见证子账户数 STRING(10) Y
    */
    public $InSubAcctNum = '';

    /**
     * @var string TranItemArray 交易信息数组
     * START
     * TranSeqNo 交易流水号 STRING(52) Y （用于退款处理）
     * InSubAcctNo 转入见证子账户的账号 STRING(50) Y
     * InTranNetMemberCode 转入交易网会员代码 STRING(32) Y
     * TranAmt 交易金额 STRING(20) Y
     * END
    */
    public $TranItemArray = [];

    /**
     * @var string Remark 备注 STRING(300) N
    */
    public $Remark = '';

    /**
     * @var string ReservedMsg 保留域 STRING(1027) N
    */
    public $ReservedMsg = '';
}
