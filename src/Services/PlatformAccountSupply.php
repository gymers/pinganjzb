<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6147
 * 平台补账-见证收单
 *
 * 见证+收单模式，对收单系统支付成功但未报送给见证的充值订单流水，平台可调用该接口，对漏报的订单号进行补发在途充值(补账)的操作
*/
class PlatformAccountSupply extends Service
{
    /**
     * @var string AcquiringChannelType 收单渠道类型 string(10) Y
     * 根据不同收单渠道上送 01-橙E收款 YST1-云收款
    */
    public $AcquiringChannelType = '';

    /**
     * @var string OrderNo 订单号 string(30) Y
     * 根据所填渠道所返回的订单号，这里是总订单号，详见《电商见证宝开发说明V1.0.docx》的2.4章节
    */
    public $OrderNo = '';

    /**
     * @var string Amt 金额 string(15) Y
    */
    public $Amt = '';
}
