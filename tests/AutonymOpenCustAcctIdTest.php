<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\AutonymOpenCustAcctId;
use PHPUnit\Framework\TestCase;

/**
 * 实名开户
*/
class AutonymOpenCustAcctIdTest extends TestCase
{
    public function testAutonymOpenCustAcctId()
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

        $service = new AutonymOpenCustAcctId();
        $service->FunctionFlag = '';
        $service->TranNetMemberCode = '';
        $service->MemberName = '';
        $service->MemberGlobalType = '';
        $service->MemberGlobalId = '';
        $service->Mobile = '';
        $service->MemberProperty = '';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
