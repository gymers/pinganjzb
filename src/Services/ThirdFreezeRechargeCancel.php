<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6268
 * 冻结充值撤销
 *
 * 撤销对应订单的第三方充值冻结金额（支持部分撤销）
*/
class ThirdFreezeRechargeCancel extends Service
{
    /**
     * @var string PayChannelType 支付渠道类型 string(10) Y
     * 0001-微信
     * 0002-支付宝
     * 0003-京东支付
     * 0004-百度支付
     * 0005-快捷通支付
     * 0006-裕福支付
     * 0007-银联商务分期
     * 0008-拉卡拉支付
     * 0009-平安付
     * 0010-QQ钱包
     * 0011-通联
     * 0012-银联商务
     * 0013-银联
     * 0014-苏宁支付
     * 0015-乐刷支付
     * 0016-中金支付
     * 0017-合利宝
     * 0018-易宝支付
     * 0019-招行一网通
     * 0020-小米支付
     * 0021-合众支付
     * 0022-和包支付
     * 0023-翼支付
     * 0024-交通银行
     * 0025-建设银行
     * 0026-宝付
     * 0027-工商银行
     * 0028-连连支付
     * 0029-钱袋宝
     * 0030-ETC
     * 0031-网易宝
     * 0032-抖音
     * 0033-拼多多
     * 0034-平安银行pos收单
     * 0035-首信易
     * 0036-富友
     * 0037-汇付
     * 0038-杉德支付
     * 0039-商盟统统付
     * 0040-云收款
     * 0041-汇聚支付
     * 0042-高汇通支付
     * 0043 -华为支付
     * 0044 -程支付
     * 0045-恒通支付
     * 0046-云闪付
     * 0047-银盛支付
     * 1111-其他
    */
    public $PayChannelType = '';

    /**
     * @var string PayChannelAssignMerNo 支付渠道所分配的商户号 string(64) Y
     * 即市场在第三方支付渠道的商户号
    */
    public $PayChannelAssignMerNo = '';

    /**
     * @var string OldPayOrderDate 原支付订单所属日期 string(8) Y
     * 即市场定义的支付订单所属日期
    */
    public $OldPayOrderDate = '';

    /**
     * @var string TotalOrderNo 总订单号 string(64) Y
     * 即第三方支付渠道产生的支付订单号
    */
    public $TotalOrderNo = '';

    /**
     * @var string TranTotalAmt 总交易金额 string(20) Y
     * 总的充值撤销金额
    */
    public $TranTotalAmt = '';

    /**
     * @var string OrdersCount 订单数量 string(30) Y
     * 暂仅支持1笔
    */
    public $OrdersCount = '';

    /**
     * @var array TranItemArray 交易信息数组
     * START
     * SubOrderRefundSubAcctNo 子订单退款子账户 string(32) Y 即充值入账的见证子账户
     * SubOrderRefundAmt 子订单退款金额 string(20) Y 小于等于充值订单中的充值金额，需大于0
     * SubOrderRefundCommission 子订单退款手续费 string(20) Y 暂不启用，默认为0
     * OldPaySubOrderNo 原支付子订单号 string(64) Y 原支付场景生成的子订单号
     * SubOrderRefundRemark 子订单退款备注 string(120) N 体现在充值对账文件中
     * SubOrderRefundReservedMsg 子订单退款保留域 string(120) N
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
