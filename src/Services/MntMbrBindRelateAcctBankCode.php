<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6138
 * 维护会员绑定提现账户联行号
 *
 * 此接口可以支持市场修改会员的提现账户的开户行信息，具体包括开户行行名、开户行的银行联行号（大小额联行号）和超级网银行号。
*/
class MntMbrBindRelateAcctBankCode extends Service
{
    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) Y
    */
    public $SubAcctNo = '';

    /**
     * @var string MemberBindAcctNo 会员绑定账号 string(32) Y
    */
    public $MemberBindAcctNo = '';

    /**
     * @var string AcctOpenBranchName 开户行名称 string(120) Y
     * 若大小额行号不填则送超级网银号对应的银行名称，若填大小额行号则送大小额行号对应的银行名称
    */
    public $AcctOpenBranchName = '';

    /**
     * @var string CnapsBranchId 大小额行号 string(14) N
     * CnapsBranchId和EiconBankBranchId两者二选一必填。
    */
    public $CnapsBranchId = '';

    /**
     * @var string EiconBankBranchId 超级网银行号 string(14) N
    */
    public $EiconBankBranchId = '';
}
