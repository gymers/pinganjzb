<?php

namespace Gymers\PinganJzb\Responses;

class QueryCustAcctIdResponse extends Response
{
    /**
     * @var string SubAcctNo 见证子账户的账号 string(32)
    */
    public $SubAcctNo = '';

    /**
     * @var string SubAcctCashBal 见证子账户可提现余额 string(15)
    */
    public $SubAcctCashBal = '';

    /**
     * @var string SubAcctAvailBal 见证子账户可用余额 string(15)
    */
    public $SubAcctAvailBal = '';

    /**
     * @var string SubAcctFreezeAmt 见证子账户冻结金额 string(15)
     * 指在担保子账户里冻结的金额
    */
    public $SubAcctFreezeAmt = '';
}
