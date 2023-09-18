<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6267
 * 冻结充值
 *
 * 第三方渠道充值金额记账到子账户的冻结金额中
*/
class ThirdFreezeRecharge extends Service
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
     * @var string PayOrderDate 支付订单所属日期 string(8) Y
     * 市场定义的订单产生日期，只支持前后浮动一天
    */
    public $PayOrderDate = '';

    /**
     * @var string TotalOrderNo 总订单号 string(64) Y
     * 即第三方支付渠道产生的支付订单号
    */
    public $TotalOrderNo = '';

    /**
     * @var string TranTotalAmt 总交易金额 string(20) Y
     * 总的充值金额（渠道类型为1111-其他时，金额必须为0.00）
    */
    public $TranTotalAmt = '';

    /**
     * @var string OrdersCount 订单数量 string(30) Y
     * 1到30条
    */
    public $OrdersCount = '';

    /**
     * @var array TranItemArray 交易信息数组
     * START
     * SubOrderFillSubAcctNo 子订单充值子账户 string(32) Y 充值入账的见证子账户
     * SubOrderFillAmt 子订单充值金额 string(20) Y 子订单充值金额
     * SubOrderFillCommission 子订单充值手续费 string(20) Y 暂不启用，默认为0
     * SubFillOrderNo 子订单充值订单号 string(64) Y 充值子订单的单号
     * SubOrderFillDesc 子订单充值描述 string(120) N 描述订单的用途
     * SubOrderFillRemark 子订单充值备注 string(120) N 体现在充值对账文件中
     * SubOrderFillReservedMsg 子订单充值保留域 string(120) N
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
