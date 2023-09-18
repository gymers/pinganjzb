<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6269
 * 补贴
 *
 * 把资方、挂账、营销子账户内的补贴资金，带原订单号地转入对应的商户子账户，增加其冻结余额，可与该订单项下的收单交易资金一起进行二次分账
*/
class SubsidyQuest extends Service
{
    /**
     * @var string OldPaySubOrderNo 原支付子订单号 string(64) Y
     * 原支付场景生成的子订单号 指6267交易生成的子订单号
    */
    public $OldPaySubOrderNo = '';

    /**
     * @var string OldPayOrderDate 原支付订单所属日期 string(8) Y
     * 即市场定义的支付订单所属日期
    */
    public $OldPayOrderDate = '';

    /**
     * @var string SubsidyOrderNo 补贴订单号 string(64) Y
     * 补贴订单号，用于补贴撤销
    */
    public $SubsidyOrderNo = '';

    /**
     * @var string SubsidyOutSubAcctNo 补贴转出子账户 string(32) Y
     * 资方、挂账、营销子账户中的一个
    */
    public $SubsidyOutSubAcctNo = '';

    /**
     * @var string SubsidyInSubAcctNo 补贴转入子账户 string(32) Y
     * 即充值入账的见证子账户
    */
    public $SubsidyInSubAcctNo = '';

    /**
     * @var string SubsidyAmt 补贴金额 string(20) Y
     * 补贴给充值子账户的金额，可用于分账
    */
    public $SubsidyAmt = '';

    /**
     * @var string SubsidyOrderDesc 补贴订单描述 string(120) N
     * 描述订单的用途
    */
    public $SubsidyOrderDesc = '';

    /**
     * @var string SubsidyRemark 补贴备注 string(120) N
     * 体现在交易对账文件中
    */
    public $SubsidyRemark = '';
}
