<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6272
 * 分账撤销
 *
 * 撤销对应的分账交易
*/
class SubAccountCancel extends Service
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
     * @var string OldOutSubAcctNo 原分账转出子账户 string(32) Y
     * 即充值入账的见证子账户
    */
    public $OldOutSubAcctNo = '';

    /**
     * @var string TranTotalAmt 总交易金额 string(20) Y
     * 总的分账撤销金额
    */
    public $TranTotalAmt = '';

    /**
     * @var string OrdersCount 订单数量 string(1) Y
     * 暂仅支持1笔
    */
    public $OrdersCount = '';

    /**
     * @var array TranItemArray 交易信息数组
     * START
     * OldSubOrderNo 原分账子单号 string(64) Y 原分账订单的子订单号
     * OldInSubAcctNo 原分账转入子账户 string(32) Y 即本次分账撤销的转出方
     * SubAcctCancelAmt 分账撤销金额 string(20) Y 小于等于分账订单中的分账金额，需大于0
     * SubAcctCancelRemark 分账撤销备注 string(120) N 体现在分账对账文件中
     * SubAcctCancelReservedMsg 分账撤销保留域 string(120) N
     * END
    */
    public $TranItemArray = [];

    /**
     * @var string ReservedMsgOne 保留域1 string(120) N
    */
    public $ReservedMsgOne = '';

    /**
     * @var string ReservedMsgTwo 保留域2 string(120) N
    */
    public $ReservedMsgTwo = '';
}
