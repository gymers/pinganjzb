<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6146
 * 查询充值明细-见证收单
 *
 * 查询充值明细交易的状态
*/
class ChargeDetailQuery extends Service
{
    /**
     * @var string AcquiringChannelType 收单渠道类型 string(10) Y
     * 根据不同收单渠道上送 01-橙E收款 YST1-云收款
    */
    public $AcquiringChannelType = '';

    /**
     * @var string OrderNo 订单号 string(30) Y
     * 下单时的子订单号，不是总订单号，详见《电商见证宝开发说明V1.0.docx》的2.4章节
    */
    public $OrderNo = '';
}
