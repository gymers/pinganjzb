<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6271
 * 分账
 *
 * 按订单号将某一商户的冻结金额分账给其他一个或多个商户（分账后的金额变为可用金额）
*/
class SubAccountQuest extends Service
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
     * @var string OutSubAcctNo 分账转出子账户 string(32) Y
     * 即充值入账的见证子账户
    */
    public $OutSubAcctNo = '';

    /**
     * @var string TranTotalAmt 总交易金额 string(20) Y
     * 总的分账金额
    */
    public $TranTotalAmt = '';

    /**
     * @var string OrdersCount 订单数量 string(3) Y
     * 1到30条
    */
    public $OrdersCount = '';

    /**
     * @var array TranItemArray 交易信息数组
     * START
     * SubAcctOrderNo 分账子单号 string(64) Y 分账订单的子订单号
     * InSubAcctNo 分账转入子账户 string(32) Y 可与OutCustAcctId同值
     * SubAcctAmt 分账金额 string(20) Y 支付到分账转入方的金额
     * SubAcctOrderDesc 分账订单描述 string(200) N 描述订单的用途
     * SubAcctRemark 分账备注 string(120) N 体现在分账对账文件中
     * SubAcctReservedMsg 分账保留域 string(120) N
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
