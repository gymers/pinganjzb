<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\CheckMsgCodeWithCorp;
use PHPUnit\Framework\TestCase;

/**
 * 银联鉴权回填短信码-校验法人
*/
class CheckMsgCodeWithCorpTest extends TestCase
{
    public function testCheckMsgCodeWithCorp()
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

        $service = new CheckMsgCodeWithCorp();
        $service->SubAcctNo = '';
        $service->TranNetMemberCode = '';
        $service->MessageCheckCode = '';
        $service->MemberAcctNo = '';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
