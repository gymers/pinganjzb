<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6129
 * 会员在途充值(经第三方支付渠道)
 *
 * 市场通过第三方支付渠道（如支付宝、微信等）进行成功扣款后，可通过此接口通知电商见证宝系统为指定的会员增加可用余额，并收取指定金额的手续费（如有）。
*/
class MemberRechargeThirdPay extends Service
{
    /**
     * @var string MemberSubAcctNo 会员子账号 string(32) Y
    */
    public $MemberSubAcctNo = '';

    /**
     * @var string TranWebMemberId 交易网会员代码 string(32) Y
    */
    public $TranWebMemberId = '';

    /**
     * @var string MemberFillAmt 会员充值金额 string(15) Y
     * 即会员的可用余额的调增金额，不包含手续费
    */
    public $MemberFillAmt = '';

    /**
     * @var string Commission 手续费金额 string(15) Y
     * 即本次充值收取的手续费
    */
    public $Commission = '';

    /**
     * @var string Ccy 币种 string(3) Y
     * RMB
    */
    public $Ccy = '';

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
     * @var string PayChannelAssignMerNo 支付渠道所分配的商户号 string(50) Y
     * 即市场在第三方支付渠道的商户号
    */
    public $PayChannelAssignMerNo = '';

    /**
     * @var string PayChannelTranSeqNo 支付渠道交易流水号 string(50) Y
     * 即上送给第三方支付渠道的支付交易的流水号或订单号
    */
    public $PayChannelTranSeqNo = '';

    /**
     * @var string EjzbOrderNo 电商见证宝订单号 string(32) Y
     * 市场自行拟定，须保证单个市场下全局唯一
    */
    public $EjzbOrderNo = '';

    /**
     * @var string EjzbOrderContent 电商见证宝订单内容 string(500) N
    */
    public $EjzbOrderContent = '';

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
