<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\SupAcctIdBalanceQuery;
use PHPUnit\Framework\TestCase;

/**
 * 查询资金汇总账户余额
*/
class SupAcctIdBalanceQueryTest extends TestCase
{
    public function testSupAcctIdBalanceQueryTest()
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

        $service = new SupAcctIdBalanceQuery();

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
