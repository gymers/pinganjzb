<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\SingleTransactionStatusQuery;
use PHPUnit\Framework\TestCase;

/**
 * 查询银行单笔交易状态
*/
class SingleTransactionStatusQueryTest extends TestCase
{
    public function testSingleTransactionStatusQuery()
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

        $service = new SingleTransactionStatusQuery();
        $service->FunctionFlag = '';
        $service->TranNetSeqNo = '';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
