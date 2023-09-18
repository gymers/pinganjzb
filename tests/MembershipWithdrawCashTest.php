<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\MembershipWithdrawCash;
use PHPUnit\Framework\TestCase;

/**
 * 会员提现-不验证
*/
class MembershipWithdrawCashTest extends TestCase
{
    public function testMembershipWithdrawCash()
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

        $service = new MembershipWithdrawCash();
        $service->TranWebName = '';
        $service->SubAcctNo = '';
        $service->MemberGlobalType = '';
        $service->MemberGlobalId = '';
        $service->TranNetMemberCode = '';
        $service->MemberName = '';
        $service->TakeCashAcctNo = '';
        $service->OutAmtAcctName = '';
        $service->Ccy = '';
        $service->CashAmt = '';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
