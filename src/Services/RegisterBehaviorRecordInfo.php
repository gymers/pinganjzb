<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6244
 * 登记行为记录信息
 *
 * 功能分支1：用于签订协议上送用户行为信息。无输出反馈，仅会实时反馈记录成功、失败情况。
 * 功能分支2：用于SH商户子账户查询是否完成补录，其中用新鉴权接口鉴权的SH商户子账户也属于补录成功的子账户。
*/
class RegisterBehaviorRecordInfo extends Service
{
    /**
     * @var string FunctionFlag 功能标志 string(2) Y
     * 1-登记行为记录信息  2-查询补录信息
    */
    public $FunctionFlag = '';

    /**
     * @var string SubAcctNo 子账户账号 string(32) Y
     * 系统返回的子账户帐号
    */
    public $SubAcctNo = '';

    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) Y
     * 交易网会员代码即会员在平台端系统的会员编号
    */
    public $TranNetMemberCode = '';

    /**
     * @var string OpClickTime 操作点击的时间 string(14) N
     * 功能标志FunctionFlag=1时必输 20201222171623
    */
    public $OpClickTime = '';

    /**
     * @var string IpAddress IP地址 string(20) N
     * 功能标志FunctionFlag=1时必输 22.25.225.255
    */
    public $IpAddress = '';

    /**
     * @var string MacAddress MAC地址 string(20) N
     * 功能标志FunctionFlag=1时必输 5E:E3:90:4R:E5:33
    */
    public $MacAddress = '';

    /**
     * @var string SignChannel 签约渠道 string(2) N
     * 1-app 2-平台H5网页 3-公众号 4-小程序    功能标志FunctionFlag=1时必输
    */
    public $SignChannel = '';

    /**
     * @var string ReservedMsgOne 保留域1 string(120) N
    */
    public $ReservedMsgOne = '';

    /**
     * @var string ReservedMsgTwo 保留域2 string(120) N
    */
    public $ReservedMsgTwo = '';
}
