<?php

namespace Gymers\PinganJzb\Responses;

class BankCostDsDealResultQueryResponse extends Response
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
     * @var array FeeArray 费项数组
     * START
     * FeeType 费用类型 string(2) 1：提现手续费 2：会员验证费 3：服务费
     * FeeStartDate 费用起始日期 string(8)
     * FeeEndDate 费用结束日期 string(8)
     * FeeDeductDate 费用扣收日期 string(8)
     * ChargeAmt 收费金额 string(15)
     * TranStatus 交易状态 string(2) 0 成功 1失败 2超时 3未处理
    */
    public $FeeArray = [];
}
