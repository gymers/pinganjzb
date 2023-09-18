<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6270
 * 补贴撤销
 *
 * 撤销对应的补贴交易（支持部分撤销）
*/
class SubsidyCancel extends Service
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
     * @var string OldSubsidyOrderNo 原补贴订单号 string(64) Y
     * 原补贴订单的订单号
    */
    public $OldSubsidyOrderNo = '';

    /**
     * @var string OldSubsidyOutSubAcctNo 原补贴转出子账户 string(32) Y
     * 资方、挂账、营销子账户中的一个
    */
    public $OldSubsidyOutSubAcctNo = '';

    /**
     * @var string OldSubsidyInSubAcctNo 原补贴转入子账户 string(32) Y
     * 即充值入账的见证子账户
    */
    public $OldSubsidyInSubAcctNo = '';

    /**
     * @var string SubsidyCancelAmt 补贴撤销金额 string(20) Y
     * 小于等于补贴订单中的补贴金额，需大于0
    */
    public $SubsidyCancelAmt = '';

    /**
     * @var string SubsidyCancelRemark 补贴撤销备注 string(120) N
     * 体现在交易对账文件中
    */
    public $SubsidyCancelRemark = '';
}
