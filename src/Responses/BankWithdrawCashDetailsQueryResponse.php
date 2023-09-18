<?php

namespace Gymers\PinganJzb\Responses;

class BankWithdrawCashDetailsQueryResponse extends Response
{
    /**
     * @var string ResultNum 本次交易返回查询结果记录数 string(8)
    */
    public $ResultNum = '';

    /**
     * @var string StartRecordNo 起始记录号 string(8)
    */
    public $StartRecordNo = '';

    /**
     * @var string EndFlag 结束标志 string(1)
     * 0：否  1：是
    */
    public $EndFlag = '';

    /**
     * @var string TotalNum 符合业务查询条件的记录总数 string(4)
     * 重复次数（一次最多返回20条记录）
    */
    public $TotalNum = '';

    /**
     * @var array TranItemArray 交易信息数组
     * START
     * BookingFlag 记账标志 string(1) 01:提现（6033；6085；6111；见证+收单退款） 02:清分（6129；6216；6130；6217;见证+收单充值；）
     * TranStatus 交易状态 string(1) 0：成功
     * BookingMsg 记账说明 string(120)
     * TranNetMemberCode 交易网会员代码 string(32)
     * SubAcctNo 见证子帐户的帐号 string(32)
     * SubAcctName 见证子账户的名称 string(120)
     * TranAmt 交易金额 string(15) 包含手续费，即交易金额=实际到账金额+手续费
     * Commission 手续费 string(15)
     * TranDate 交易日期 string(8)
     * TranTime 交易时间 string(6)
     * FrontSeqNo 见证系统流水号 string(16)
     * Remark 备注 string(120) 如果是见证+收单的交易，返回交易订单号
     * END
    */
    public $TranItemArray = [];
}
