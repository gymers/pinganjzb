<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6109
 * 查询银行费用扣收结果
 *
 * 查询时间段内银行扣收平台服务费(提现手续费、银联鉴权服务费)结果。
*/
class BankCostDsDealResultQuery extends Service
{
    /**
     * @var string FunctionFlag 功能标志 string(1) Y
     * 1:全部，2：指定时间段
    */
    public $FunctionFlag = '';

    /**
     * @var string StartDate 开始日期 string(8) N
     * 若是指定时间段查询，则必输，当查询全部时，不起作用
    */
    public $StartDate = '';

    /**
     * @var string EndDate 终止日期 string(8) N
     * 若是指定时间段查询，则必输，当查询全部时，不起作用
    */
    public $EndDate = '';

    /**
     * @var string PageNum 页码 string(6) Y
     * 起始值为1，每次最多返回20条记录，第二页返回的记录数为第21至40条记录，第三页为41至60条记录，顺序均按照建立时间的先后
    */
    public $PageNum = '';
}
