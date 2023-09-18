<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6050
 * 查询普通转账充值明细
 *
 * 接口用于查询会员主动转账进资金汇总账户的明细情况。若会员使用绑定账号转入，则直接入账到会员子账户。
 * 若未使用绑定账号转入，则系统无法自动清分到对应子账户，则转入挂账子账户由平台自行清分。
 * 若是 “见证+收单充值”T0充值记录时备注Note为“见证+收单充值,订单号” 此接口可以查到T0到账的“见证+收单充值”充值记录
*/
class CommonTransferRechargeQuery extends Service
{
    /**
     * @var string FunctionFlag 功能标志 string(1) Y
     * 1为查询当日数据，0查询历史数据
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

    /**
     * @var string PageNum 页码 string(6) Y
     * 起始值为1，每次最多返回20条记录，第二页返回的记录数为第21至40条记录，第三页为41至60条记录，顺序均按照建立时间的先后
    */
    public $PageNum = '';
}
