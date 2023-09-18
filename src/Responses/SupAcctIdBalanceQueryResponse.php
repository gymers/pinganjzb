<?php

namespace Gymers\PinganJzb\Responses;

class SupAcctIdBalanceQueryResponse extends Response
{
    /**
     * @var string LastBalance 上日余额 string(15)
     * 前一天的余额
    */
    public $LastBalance = '';

    /**
     * @var string CurBalabce 当前余额 string(15)
     * 当前余额
    */
    public $CurBalabce = '';

    /**
     * @var string Balance 账户余额 string(15)
     * 账户余额
    */
    public $Balance = '';

    /**
     * @var string AddedBalance 增值余额 string(15)
     * 增值余额
    */
    public $AddedBalance = '';
}
