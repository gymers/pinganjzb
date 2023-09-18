<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\RegisterBillSupportWithdraw;
use PHPUnit\Framework\TestCase;

/**
 * 登记挂账(支持撤销)
*/
class RegisterBillSupportWithdrawTest extends TestCase
{
    public function testRegisterBillSupportWithdraw()
    {
        $config = [
            'java_hosts' => '',
            'java_log_level' => 2,
            'properties_path' => '',
            'FundSummaryAcctNo' => '',
            'MrchCode' => '',
            'uid' => '',
            'response_type' => 'array',
        ];

        $service = new RegisterBillSupportWithdraw();
        $service->TranNetMemberCode = '';
        $service->SubAcctNo = '';
        $service->OrderNo = '';
        $service->SuspendAmt = '';
        $service->TranFee = '';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
