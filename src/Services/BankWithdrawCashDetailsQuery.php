<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6073
 * 查询银行时间段内交易明细
 *
 * 查询银行时间段内清分提现明细接口：若为“见证+收单退款”“见证+收单充值”记录时备注Note为“见证+收单充值,订单号”“见证+收单退款,订单号”，
 * 此接口可以查到T0/T1的充值明细和退款记录。查询标志：充值记录仍用3清分选项查询，退款记录同提现用2选项查询。
*/
class BankWithdrawCashDetailsQuery extends Service
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
     * 2：提现 3：清分
    */
    public $QueryFlag = '';

    /**
     * @var string BeginDate 开始日期 string(8) N
     * 若是历史查询，则必输，当日查询时，不起作用；开始日期不能超过当前日期
    */
    public $BeginDate = '';

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
