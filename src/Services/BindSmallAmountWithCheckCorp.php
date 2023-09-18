<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6240
 * 会员绑定提现账户小额鉴权-校验法人
 *
 * 会员申请绑定提现账户，绑定后从会员子账户中提现到绑定账户。
 * 此接口只支持往账鉴权。
 * 往账鉴权：
 * 该接口发起成功后，银行会向提现账户转入小于等于0.5元的随机金额，并短信通知客户查看，客户查看后，需将收到的金额大小，在电商平台页面上回填，并通知银行。银行验证通过后，完成提现账户绑定。
 * 平安银行的账户，即银行类型送1时，大小额行号和超级网银号都不用送
 * 企业对公账户只能使用小额鉴权绑卡
 * 企业与个体工商户增加校验工商五要素
 * 增加手机指令号验证，申请小额鉴权有上送经办人的，指令号会发到经办人手机号，未输入的经办人的发到Mobile；
 * 交易网会员代码即会员在平台端系统的会员编号；店铺ID和店铺名称是企业或者个人在平台注册时的ID或名称
 * 如果收不到短信，2分钟后可以重新发起6240发起短信，每天最多只能发起5次
 * 此鉴权用户可以分为三类：1、纯个人 2、个体工商户 3、企业
*/
class BindSmallAmountWithCheckCorp extends Service
{
    /**
     * @var string SubAcctNo 子账户账号 string(32) 必输
     * 系统返回的子账户帐号若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的子账户账号，并且须用“|::|”（右侧）进行分隔。
    */
    public $SubAcctNo = '';

    /**
     * @var string TranNetMemberCode 交易网会员代码 string(32) 必输
     * 交易网会员代码即会员在平台端系统的会员编号若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的交易网代码，并且须用“|::|”（右侧）进行分隔。
    */
    public $TranNetMemberCode = '';

    /**
     * @var string MemberName 会员名称 string(120) 必输
     * 客户真实姓名或企业名称
    */
    public $MemberName = '';

    /**
     * @var string MemberGlobalType 会员证件类型 string(2) 必输
     * 详见《接口证件类型说明》
    */
    public $MemberGlobalType = '';

    /**
     * @var string 会员证件号码 string(20) 必输
     * 身份证号码或统一社会信用代码证号
    */
    public $MemberGlobalId = '';

    /**
     * @var string MemberAcctNo 会员账号 string(32) 必输
     * 提现的银行卡，和会员名称保持一致
    */
    public $MemberAcctNo = '';

    /**
     * @var string BankType 银行类型 string(1) 必输
     * 1：本行 2：他行
    */
    public $BankType = '';

    /**
     * @var string AcctOpenBranchName 开户行名称 string(120) 必输
     * 填超级网银号对应的银行名称
    */
    public $AcctOpenBranchName = '';

    /**
     * @var string CnapsBranchId 大小额行号 string(14) 可选
     * 大小额行号和超级网银行号两者二选一必填。
    */
    public $CnapsBranchId = '';

    /**
     * @var string EiconBankBranchId 超级网银行号 string(14) 可选
     * 大小额行号和超级网银行号两者二选一必填。
    */
    public $EiconBankBranchId = '';

    /**
     * @var string Mobile 手机号码 string(12) 必输
     * 手机号 测试送11个1
    */
    public $Mobile = '';

    /**
     * @var string IndivBusinessFlag 个体工商户标志 string(1) 可选
     * 1：是 2：否(个人必输)
    */
    public $IndivBusinessFlag = '';

    /**
     * @var string CompanyName 公司名称 string(120) 可选
     * 个体工商户必输
    */
    public $CompanyName = '';

    /**
    * @var string CompanyGlobalType 公司证件类型 string(4) 可选
    * 个体工商户必输证件类型仅支持73-统一社会信用代码、68-营业执照 、52-组织机构代码证
    */
    public $CompanyGlobalType = '';

    /**
     * @var string CompanyGlobalId 公司证件号码 string(32) 可选
     * 个体工商户必输
    */
    public $CompanyGlobalId = '';

    /**
     * @var string ShopId 店铺id string(32) 可选
     * 个体工商户、企业必输
    */
    public $ShopId = '';

    /**
     * @var string ShopName 店铺名称 string(120) 可选
     * 个体工商户、企业必输
    */
    public $ShopName = '';

    /**
     * @var string AgencyClientFlag 是否存在经办人 string(1) 可选
     * 1：是 2：否（企业必输，个纯个人与个体工商户无需填写）
    */
    public $AgencyClientFlag = '';

    /**
     * @var string AgencyClientName 经办人姓名 string(120) 可选
     * 是否存在经办人AgencyClientFlag=1时必输
    */
    public $AgencyClientName = '';

    /**
     * @var string AgencyClientGlobalType 经办人证件类型 string(4) 可选
     * 是否存在经办人AgencyClientFlag=1时必输，仅支持1-身份证
    */
    public $AgencyClientGlobalType = '';

    /**
     * @var string AgencyClientGlobalId 经办人证件号 string(32) 可选
     * 是否存在经办人AgencyClientFlag=1时必输
    */
    public $AgencyClientGlobalId = '';

    /**
     * @var string AgencyClientMobile 经办人手机号 string(32) 可选
     * 是否存在经办人AgencyClientFlag=1时必输，短信指令号优先发送至此手机号
    */
    public $AgencyClientMobile = '';

    /**
     * @var string RepFlag 会员名称是否是法人 string(1) 可选
     * 1-是  2-否（个体工商户、企业必输，纯个人无需填写）
    */
    public $RepFlag = '';

    /**
     * @var string ReprName 法人名称 string(120) 可选
     * 会员名称是否是法人RepFlag为2时必输
    */
    public $ReprName = '';

    /**
     * @var string ReprGlobalType 法人证件类型 string(32) 可选
     * 会员名称是否是法人RepFlag为2时必输、企业必输,仅支持1-身份证；3-港澳回乡证；5-台胞证；19-外国护照
    */
    public $ReprGlobalType = '';

    /**
     * @var string ReprGlobalId 法人证件号码 string(32) 可选
     * 会员名称是否是法人RepFlag为2时必输、企业必输
    */
    public $ReprGlobalId = '';

    /**
     * @var string Flag 标志（未启用） string(120) 可选
    */
    public $Flag = '';
}
