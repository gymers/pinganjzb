<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6114
 * 查询子帐号历史余额及待转可提现状态信息
 *
 * 查询子帐号历史余额及待转可提现状态信息。(只能查询10天内)
*/
class CustAcctIdHistoryBalanceQuery extends Service
{
    /**
     * @var string SubAcctNo 见证子帐户的帐号 string(32) Y
    */
    public $SubAcctNo = '';

    /**
     * @var string StartDate 开始日期 string(8) N
     * 若是指定时间段查询，则必输，当查询全部时，不起作用.同时不上送StartDate和EndDate，取系统当天日期查询当天记录. 只能查相隔10天内记录. 格式：20181201
    */
    public $StartDate = '';

    /**
     * @var string EndDate 终止日期 string(8) N
     * 若是指定时间段查询，则必输，当查询全部时，不起作用.同时不上送StartDate和EndDate，取系统当天日期查询当天记录. 只能查相隔10天内记录.
    */
    public $EndDate = '';

    /**
     * @var string PageNum 页码 string(6) Y
     * 起始值为1，每次最多返回20条记录，第二页返回的记录数为第21至40条记录，第三页为41至60条记录，顺序均按照建立时间的先后
    */
    public $PageNum = '';
}
