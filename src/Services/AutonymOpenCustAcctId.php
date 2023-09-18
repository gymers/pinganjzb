<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6248
 * 实名开户
 *
 * 会员在银行注册，开立会员子账户，并实名认证。
 * 交易网会员代码即会员在平台端系统的会员编号。
 * 平台需保存银行返回的子账户账号，后续交易接口都会用到。
 * 会员属性字段为预留扩展字段，当前必须送默认值
*/
class AutonymOpenCustAcctId extends Service
{
    /**
     * @var string FunctionFlag 功能标志 string(1) Y
     * 1:开户2:销户3:存量实名
    */
    public $FunctionFlag = '';

    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) Y
     * 交易网会员代码即会员在平台端系统的会员编号
    */
    public $TranNetMemberCode = '';

    /**
     * @var string MemberName 会员名称 string(120) Y
     * 客户真实姓名（销户时可选）
    */
    public $MemberName = '';

    /**
     * @var string MemberGlobalType 会员证件类型 string(2) Y
     * （销户时可选）:52:组织机构代码证 68:营业执照 73:统一社会信用代码 1:身份证 3:港澳台居民通行证（即回乡证） 4:中国护照 5:台湾居民来往大陆通行证（即台胞证） 19:外国护照
    */
    public $MemberGlobalType = '';

    /**
     * @var string MemberGlobalId 会员证件号码 string(20) Y
     * 证件号码（销户时可选）
    */
    public $MemberGlobalId = '';

    /**
     * @var string UserNickname 用户昵称 string(120) N
     * 用户昵称
    */
    public $UserNickname = '';

    /**
     * @var string Mobile 手机号码 string(12) N
     * 手机号码（测试环境送11个1）
    */
    public $Mobile = '';

    /**
     * @var string MemberProperty 会员属性 string(2) Y
     * SH-商户子账户（默认）（销户时可选）
    */
    public $MemberProperty = '';

    /**
     * @var string IndivBusinessFlag 个体工商户标志 string(1) N
     * 1:是 2:否(个人必输)
    */
    public $IndivBusinessFlag = '';

    /**
     * @var string CompanyName 公司名称 string(120) N
     * 个体工商户必输
    */
    public $CompanyName = '';

    /**
     * @var string CompanyGlobalType 公司证件类型 string(4) N
     * 个体工商户必输:73-统一社会信用代码证号
    */
    public $CompanyGlobalType = '';

    /**
     * @var string CompanyGlobalId 公司证件号码 string(32) N
     * 个体工商户必输
    */
    public $CompanyGlobalId = '';

    /**
     * @var string ShopId 店铺id string(32) N
     * 个体工商户必输
    */
    public $ShopId = '';

    /**
     * @var string ShopName 店铺名称 string(120) N
     * 个体工商户必输
    */
    public $ShopName = '';

    /**
     * @var string RepFlag 法人标志 string(1) N
     * 1:是
    */
    public $RepFlag = '';

    /**
     * @var string ReprName 法人名称 string(120) N
     * 个体工商户必输
    */
    public $ReprName = '';

    /**
     * @var string ReprGlobalType 法人证件类型 string(32) N
     * 个体工商户必输:1:身份证
    */
    public $ReprGlobalType = '';

    /**
     * @var string ReprGlobalId 法人证件号码 string(32) N
     * 个体工商户必输
    */
    public $ReprGlobalId = '';
}
