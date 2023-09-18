<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6048
 * 查询银行提现退单信息
 *
 * 通过大小额支付系统进行的提现交易，会存在被收款行退票的情况。本接口用于查询此类退票交易的记录，可以退票日期为区间查询该段时间区间内的退票记录。
 * 退单情况体现为原提现流水成功，但会有一笔退回来的新入账流水，提现的子账户余额重新自动增加。
 * 举例：A提现100元，该笔提现指令显示提现成功，A的余额减少100元。后续若退回来了，平台会查询到A有100元的入账，A的余额增加100元。
 * 通过此接口可以知道该笔入账是原来提现操作所退回来的。
 *
*/
class BankWithdrawCashBackQuery extends Service
{
    /**
     * @var string FunctionFlag 功能标志 string(1) Y
     * 1-提现退票 2-小额鉴权退票
    */
    public $FunctionFlag = '';

    /**
     * @var string StartDate 开始日期 string(8) Y
     * 开始日期不能超过当前日期
    */
    public $StartDate = '';

    /**
     * @var string EndDate 终止日期 string(8) Y
     * 终止日期不能超过当前日期
    */
    public $EndDate = '';
}
