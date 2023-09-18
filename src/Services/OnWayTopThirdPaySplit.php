<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6216
 * 第三方支付渠道在途充值（分账）
 *
 * 市场通过第三方支付渠道（如支付宝、微信等）进行成功扣款后，可通过此接口通知电商见证宝系统为指定的会员增加可用余额，并收取指定金额的手续费（如有）。可支持多笔充值。
*/
class OnWayTopThirdPaySplit extends Service
{
    /**
     * @var string PayChannelType 支付渠道类型 string(4) Y
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
     * 0035-首信易
     * 0036-富友
     * 0037-汇付
     * 0038-杉德支付
     * 0039-商盟统统付
     * 0040-云收款
     * 0041-汇聚支付
     * 0042-高汇通支付
     * 0043-华为支付
     * 0044-程支付
     * 0045-恒通支付
     * 0046-云闪付
     * 0047-银盛支付
    */
    public $PayChannelType = '';

    /**
     * @var string PayChannelAssignMerNo 支付渠道所分配的商户号 string(64) Y
     * 即市场在第三方支付渠道的商户号
    */
    public $PayChannelAssignMerNo = '';

    /**
     * @var string TotalOrderNo 总订单号 string(64) Y
     * 即第三方支付渠道产生的总订单号
    */
    public $TotalOrderNo = '';

    /**
     * @var string TranTotalAmt 交易总金额 string(32) Y
     * 即订单总金额（子订单交易金额和子订单交易费用的总和）
    */
    public $TranTotalAmt = '';

    /**
     * @var string OrdersCount 订单数量 string(2) Y
     * 1到25条
    */
    public $OrdersCount = '';

    /**
     * @var array TranItemArray 信息数组
     * START
     * RechargeSubAcctNo 充值子账户 string(32) Y 同一笔总订单号下子账户不能重复
     * SubOrderFillMemberCd 子订单充值会员代码 string(32) Y
     * SubOrderTranAmt 子订单交易金额 string(32) Y 即会员的可用余额的调增金额，不包含手续费
     * SubOrderTranFee 子订单交易费用 string(32) Y 即本子订单交易充值收取的手续费
     * SubOrderNo 子订单号 string(64) Y 全局唯一
     * SubOrderContent 子订单内容 string(500) N
     * SubOrderBussSeqNo 子订单业务流水号 string(64) N 全局唯一
     * SubOrderRemark 子订单备注 string(120) N
     * ReservedMsg 保留域 string(32) N
     * END
    */
    public $TranItemArray = [];
}
