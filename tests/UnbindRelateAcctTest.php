<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\UnbindRelateAcct;
use PHPUnit\Framework\TestCase;

/**
 * 会员解绑提现账户
*/
class UnbindRelateAcctTest extends TestCase
{
    public function testUnbindRelateAcct()
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

        $service = new UnbindRelateAcct();
        $service->FunctionFlag = '1';
        $service->TranNetMemberCode = '100000001';
        $service->SubAcctNo = '3657000000136006';
        $service->MemberAcctNo = '6230580000051480254';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
