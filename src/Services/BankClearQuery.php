<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6108
 * 查询银行在途清算结果
 *
 * 查询时间段内交易网的在途清算结果。
*/
class BankClearQuery extends Service
{
    /**
     * @var string FunctionFlag 功能标志 string(1) Y
     * 1:全部，2：指定时间段
    */
    public $FunctionFlag = '';

    /**
     * @var string StartDate 开始日期 string(8) N
     * 若是指定时间段查询，则必输，当查询全部时，不起作用；开始日期不能超过当前日期 格式：20181201
    */
    public $StartDate = '';

    /**
     * @var string EndDate 终止日期 string(8) N
     * 若是指定时间段查询，则必输，当查询全部时，不起作用；终止日期不能超过当前日期
    */
    public $EndDate = '';

    /**
     * @var string PageNum 页码 string(6) Y
     * 起始值为1，每次最多返回20条记录，第二页返回的记录数为第21至40条记录，第三页为41至60条记录，顺序均按照建立时间的先后
    */
    public $PageNum = '';
}
