<?php

namespace Gymers\PinganJzb\Responses;

class QueryCrowdAcountMsgResponse extends Response
{
    /**
     * @var string MemberSubAcctNo 会员子账户 string(32) Y
     * 电商见证宝系统生成的流水号
    */
    public $MemberSubAcctNo = '';

    /**
     * @var string TraderCode 商户号 string(64) N
    */
    public $TraderCode = '';

    /**
     * @var string OrderNo 订单号 string(64) Y
    */
    public $OrderNo = '';

    /**
     * @var string NoSquareAmt 未到账金额 string(18,2) Y
    */
    public $NoSquareAmt = '';

    /**
     * @var string SquareAmt 已到账金额 string(18,2) Y
    */
    public $SquareAmt = '';

    /**
     * @var string BranchAmt 可分账金额 string(18,2) Y
    */
    public $BranchAmt = '';

    /**
     * @var string BranchRate 分账比例 string(6) Y
    */
    public $BranchRate = '';

    /**
     * @var string AltAmt 已分给其它商户金额 string(18,2) Y
    */
    public $AltAmt = '';

    /**
     * @var string ReservedMsgOne 保留域1 string(200) N
    */
    public $ReservedMsgOne = '';

    /**
     * @var string ReservedMsgTwo 保留域2 string(200) N
    */
    public $ReservedMsgTwo = '';
}
