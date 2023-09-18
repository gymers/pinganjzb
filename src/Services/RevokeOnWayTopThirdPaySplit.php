<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6217
 * 第三方支付渠道在途充值撤销（分账）
 *
 * 市场若需要对经6216【会员在途充值(经第三方支付渠道)】的指令进行撤销，可通过本接口实现。支持多笔撤销。
*/
class RevokeOnWayTopThirdPaySplit extends Service
{
    /**
     * @var string OldPayChannelType 原支付渠道类型 string(4) Y
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
    public $OldPayChannelType = '';

    /**
     * @var string OldTotalOrderNo 原总订单号 string(4) Y
     * 6216接口送的总订单号
    */
    public $OldTotalOrderNo = '';

    /**
     * @var string TotalRefundAmt 退款总金额 string(32) Y
     * 支付总金额（子订单会员退款金额和子订单手续费退款金额的总和）
    */
    public $TotalRefundAmt = '';

    /**
     * @var string RefundOrderNum 退款订单数量 string(4) Y
     * 1-25之间
    */
    public $RefundOrderNum = '';

    /**
     * @var array TranItemArray 信息数组
     * START
     * SubOrderRefundSubAcctNo 子订单退款子账户 string(32) Y 子账户不能重复
     * SubOrderRefundMemberCd 子订单退款会员代码 string(32) Y
     * SubOrderMemberRefundAmt 子订单会员退款金额 string(32) Y 即从会员子账号扣除的金额，不能大于原订单的交易金额
     * SubOrderFeeRefundAmt 子订单手续费退款金额 string(32) Y 即从手续费子账号（或者出入金账户）扣除的金额，不能大于原订单的交易费用
     * SubOrderRefundOrderNo 子订单退款订单号 string(64) Y
     * SubOrderRefundSeqNo 子订单退款流水号 string(64) N 全局唯一
     * ReservedMsg 保留域 string(120) N
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
