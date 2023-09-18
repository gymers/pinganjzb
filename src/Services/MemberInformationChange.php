<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6296
 * 会员信息修改
 *
 * 企业用户支持修改会员名称、公司名称、法人名称、法人证件类型、法人证件号码,个人用户只支持修改会员名称,
 * 接口暂不支持个体工商户,若企业同名户为个体工商户,不解绑提现账户,不更新同名户信息,若个人同名户为个体工商户,解绑提现账户,不更新同名户信息
*/
class MemberInformationChange extends Service
{
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
     * @var string MemberName 会员名称 string(120) Y
     * 客户真实姓名
    */
    public $MemberName = '';

    /**
     * @var string CompanyName 公司名称 string(120) N
     * 账户为企业时公司名称、法人名称、法人证件类型、法人证件号码必输,且公司名称与会员名称一致
    */
    public $CompanyName = '';

    /**
     * @var string ReprName 法人名称 string(120) N
     * 账户为企业时公司名称、法人名称、法人证件类型、法人证件号码必输
    */
    public $ReprName = '';

    /**
     * @var string ReprGlobalType 法人证件类型 string(32) N
     * 账户为企业时公司名称、法人名称、法人证件类型、法人证件号码必输
    */
    public $ReprGlobalType = '';

    /**
     * @var string ReprGlobalId 法人证件号码 string(32) N
     * 账户为企业时公司名称、法人名称、法人证件类型、法人证件号码必输
    */
    public $ReprGlobalId = '';
}
