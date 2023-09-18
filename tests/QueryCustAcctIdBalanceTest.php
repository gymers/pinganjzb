<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\QueryCustAcctIdBalance;
use PHPUnit\Framework\TestCase;

/**
 * 查询会员子账号余额
*/
class QueryCustAcctIdBalanceTest extends TestCase
{
    public function testQueryCustAcctIdBalance()
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

        $service = new QueryCustAcctIdBalance();
        $service->SubAcctNo = '';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
