<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\CustAcctIdBalanceQuery;
use PHPUnit\Framework\TestCase;

/**
 * 查询银行子账户余额
*/
class CustAcctIdBalanceQueryTest extends TestCase
{
    public function testCustAcctIdBalanceQuery()
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

        $service = new CustAcctIdBalanceQuery();
        $service->SubAcctNo = '3657000000136006';
        $service->QueryFlag = '2';
        $service->PageNum = '1';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
