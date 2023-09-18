<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6037
 * 查询会员子账号
 *
 * 根据在平台的会员ID查询银行的子账户号。
*/
class QueryCustAcctId extends Service
{
    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) Y
    */
    public $TranNetMemberCode = '';
}
