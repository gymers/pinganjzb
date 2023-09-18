<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\MemberBindQuery;
use PHPUnit\Framework\TestCase;

/**
 * 会员绑定信息查询
*/
class MemberBindQueryTest extends TestCase
{
    public function testMemberBindQuery()
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

        $service = new MemberBindQuery();
        $service->QueryFlag = '2';
        $service->SubAcctNo = '3657000000136006';
        $service->PageNum = '1';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
