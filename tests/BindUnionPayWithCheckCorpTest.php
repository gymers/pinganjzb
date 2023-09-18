<?php

namespace Gymers\Tests;

use Gymers\PinganJzb\PinganJzb;
use Gymers\PinganJzb\Services\BindUnionPayWithCheckCorp;
use PHPUnit\Framework\TestCase;

/**
 * 会员绑定提现账户银联鉴权-校验法人
*/
class BindUnionPayWithCheckCorpTest extends TestCase
{
    public function testBindUnionPayWithCheckCorp()
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

        $service = new BindUnionPayWithCheckCorp();
        $service->SubAcctNo = '';
        $service->TranNetMemberCode = '';
        $service->MemberName = '';
        $service->MemberGlobalType = '';
        $service->MemberGlobalId = '';
        $service->MemberAcctNo = '';
        $service->BankType = '';
        $service->AcctOpenBranchName = '';
        $service->EiconBankBranchId = '';
        $service->Mobile = '';
        $service->IndivBusinessFlag = '';
        $service->RepFlag = '';

        $response = PinganJzb::config($config)->request($service);

        $this->assertArrayHasKey('TxnReturnCode', $response, json_encode($response));
    }
}
