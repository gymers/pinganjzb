<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6072
 * 查询银行时间段内交易明细
 *
 * 查询时间段的会员成功交易
*/
class BankTransactionDetailsQuery extends Service
{
    /**
     * @var string FunctionFlag 功能标志 string(1) Y
     * 1:当日，2：历史
    */
    public $FunctionFlag = '';

    /**
     * @var string SubAcctNo 见证子帐户的帐号 string(32) Y
    */
    public $SubAcctNo = '';

    /**
     * @var string QueryFlag 查询标志 string(1) Y
     * 1：全部 2：转出 3：转入
    */
    public $QueryFlag = '';

    /**
     * @var string StartDate 开始日期 string(8) N
     * 若是历史查询，则必输，当日查询时，不起作用；开始日期不能超过当前日期
    */
    public $StartDate = '';

    /**
     * @var string EndDate 终止日期 string(8) N
     * 若是历史查询，则必输，当日查询时，不起作用；终止日期不能超过当前日期
    */
    public $EndDate = '';

    /**
     * @var string PageNum 页码 string(6) Y
     * 起始值为1，每次最多返回20条记录，第二页返回的记录数为第21至40条记录，第三页为41至60条记录，顺序均按照建立时间的先后
    */
    public $PageNum = '';
}
