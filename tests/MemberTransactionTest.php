<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\MemberTransaction;
use PHPUnit\Framework\TestCase;

/**
 * 会员间交易-不验证
*/
class MemberTransactionTest extends TestCase
{
    public function testMemberTransaction()
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

        $service = new MemberTransaction();
        $service->FunctionFlag = '';
        $service->OutSubAcctNo = '';
        $service->OutMemberCode = '';
        $service->InSubAcctNo = '';
        $service->InMemberCode = '';
        $service->TranAmt = '';
        $service->TranFee = '';
        $service->TranType = '';
        $service->Ccy = '';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
