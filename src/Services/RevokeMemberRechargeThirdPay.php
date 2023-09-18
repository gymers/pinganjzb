<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6130
 * 撤销会员在途充值(经第三方支付渠道)
 *
 * 市场若需要对经6129【会员在途充值(经第三方支付渠道)】的指令进行撤销，可通过本接口实现。
*/
class RevokeMemberRechargeThirdPay extends Service
{
    /**
     * @var string OldFillFrontSeqNo 原充值的前置流水号 string(30) Y
     * 即原6129在途充值交易的返回报文前置流水号
    */
    public $OldFillFrontSeqNo = '';

    /**
     * @var string OldFillPayChannelType 原充值的支付渠道类型 string(4) Y
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
    public $OldFillPayChannelType = '';

    /**
     * @var string OldPayChannelTranSeqNo 原充值的支付渠道交易流水号 string(50) Y
     * 即原6129在途充值交易的支付渠道交易流水号或订单号
    */
    public $OldPayChannelTranSeqNo = '';

    /**
     * @var string OldFillEjzbOrderNo 原充值的电商见证宝订单号 string(32) Y
     * 即原6129在途充值交易的电商见证宝订单号
    */
    public $OldFillEjzbOrderNo = '';

    /**
     * @var string ApplyCancelMemberAmt 申请撤销的会员金额 string(15) Y
     * 会员申请退款的金额，不包含手续费
    */
    public $ApplyCancelMemberAmt = '';

    /**
     * @var string ApplyCancelCommission 申请撤销的手续费金额 string(15) Y
     * 手续费退还金额
    */
    public $ApplyCancelCommission = '';

    /**
     * @var string Remark 备注 string(120) N
    */
    public $Remark = '';

    /**
     * @var string ReservedMsgOne 保留域1 string(120) N
    */
    public $ReservedMsgOne = '';

    /**
     * @var string ReservedMsgTwo 保留域2 string(120) N
    */
    public $ReservedMsgTwo = '';

    /**
     * @var string ReservedMsgThree 保留域3 string(120) N
    */
    public $ReservedMsgThree = '';
}
