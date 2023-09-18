<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\QueryCustAcctId;
use PHPUnit\Framework\TestCase;

/**
 * 查询会员子账号
*/
class QueryCustAcctIdTest extends TestCase
{
    public function testQueryCustAcctId()
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

        $service = new QueryCustAcctId();
        $service->TranNetMemberCode = '';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
