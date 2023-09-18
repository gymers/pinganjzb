<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6145
 * 调账-见证收单
 *
 * 见证+收单模式，若前一日存在子账户记账失败的情况(如平台上送子钱包信息错误)，对应清算资金挂在快收专属子账户，
 * 平台核实资金归属后，调用该接口，将资金清分到具体的会员子账户。(需要关联原资金流水)
*/
class AccountRegulation extends Service
{
    /**
     * @var string AcquiringChannelType 收单渠道类型 string(10) Y
     * 根据不同收单渠道上送 01-橙E收款 YST1-云收款
    */
    public $AcquiringChannelType = '';

    /**
     * @var string OrderNo 订单号 string(30) Y
     * 下单时的子订单号，不是总订单号，详见《电商见证宝开发说明V1.0.docx》的2.4章节
    */
    public $OrderNo = '';

    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) Y
    */
    public $SubAcctNo = '';

    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) Y
    */
    public $TranNetMemberCode = '';

    /**
     * @var string SubAcctName 见证子账户的名称 string(120) Y
    */
    public $SubAcctName = '';

    /**
     * @var string Amt 金额 string(15) Y
    */
    public $Amt = '';

    /**
     * @var string Ccy 币种 string(3) Y
     * RMB
    */
    public $Ccy = '';

    /**
     * @var string Remark 备注 string(120) Y
    */
    public $Remark = '';
}
