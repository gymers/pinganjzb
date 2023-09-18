<?php

namespace Gymers\PinganJzb\Responses;

class BankClearQueryResponse extends Response
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
     * Date 日期 string(8)
     * SubAcctType 子账号类型 string(1) 7：在途子账户
     * ReconcileStatus 对账状态 string(2) 0；成功 1：失败
     * ReconcileReturnMsg 对账返回信息 string(256)
     * TotalAmt 待清算总金额 string(15)
     * ClearingStatus 清算状态 string(2) 0：成功，1：失败，2：异常 3:待处理
     * ClearingReturnMsg 清算返回信息 string(256)
     * ClearingFinishDate 清算完成日期 string(8) 在途清算完成日期
     * END
    */
    public $TranItemArray = [];
}
