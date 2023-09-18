<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\RegisterBehaviorRecordInfo;
use PHPUnit\Framework\TestCase;

/**
 * 登记行为记录信息
*/
class RegisterBehaviorRecordInfoTest extends TestCase
{
    public function testRegisterBehaviorRecordInfo()
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

        $service = new RegisterBehaviorRecordInfo();
        $service->FunctionFlag = '';
        $service->SubAcctNo = '';
        $service->TranNetMemberCode = '';
        $service->OpClickTime = '';
        $service->IpAddress = '';
        $service->MacAddress = '';
        $service->SignChannel = '';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
