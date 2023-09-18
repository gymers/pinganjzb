<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6098
 * 会员绑定信息查询
 *
 * 查询标志为“单个会员”的情况下，返回该会员的有效的绑定账户信息。
 * 查询标志为“全部会员”的情况下，返回市场下的全部的有效的绑定账户信息。
 * 查询标志为“单个会员的证件信息”的情况下，返回市场下的指定的会员的留存在电商见证宝系统的证件信息。
*/
class MemberBindQuery extends Service
{
    /**
     * @var string QueryFlag 查询标志 string(1) Y
     * 1：全部会员 2：单个会员
    */
    public $QueryFlag = '';

    /**
     * @var string SubAcctNo 见证子账户的账号 string(32) N
     * 若QueryFlag为2时，子账户账号必输
    */
    public $SubAcctNo = '';

    /**
     * @var string PageNum 页码 string(6) Y
     * 起始值为1，每次最多返回20条记录，第二页返回的记录数为第21至40条记录，第三页为41至60条记录，顺序均按照建立时间的先后
    */
    public $PageNum = '';
}
