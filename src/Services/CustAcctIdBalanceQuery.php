<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6010
 * 查询银行子账户余额
 *
 * 查询会员子账户以及平台的功能子账户的余额。
*/
class CustAcctIdBalanceQuery extends Service
{
    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) N
     * 若QueryFlag为2时，子账号必输。
    */
    public $SubAcctNo = '';

    /**
     * @var string QueryFlag 查询标志 string(1) Y
     * 2：普通会员子账号 3：功能子账号
    */
    public $QueryFlag = '';

    /**
     * @var string PageNum 页码 string(6) Y
     * 起始值为1，每次最多返回20条记录，第二页返回的记录数为第21至40条记录，第三页为41至60条记录，顺序均按照建立时间的先后
    */
    public $PageNum = '';
}
