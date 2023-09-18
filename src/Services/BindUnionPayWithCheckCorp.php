<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6238
 * 会员绑定提现账户银联鉴权-校验法人
 *
 * 平台接收到银行返回成功后，进入输入动态验证码的页面，有效期120秒，若120秒未输入，客户可点击重新发送动态验证码，这个步骤重新调用该接口即可
 * 平安银行的账户，大小额行号和超级网银号都不用送。
 * 银联鉴权支持的银行列表请参见文档附录的“支持银联验证绑卡的银行列表”。
 * 支持会员绑定多张卡，但一张卡只能绑定一个会员。
 * 鉴权类型分为个人与个体工商户。
 * 交易网会员代码即会员在平台端系统的会员编号；店铺ID和店铺名称是企业或者个人在平台注册时的ID或名称
 * 如果绑定的是个体工商户的法人的个人卡，法人的证件类型仅支持1-身份证，公司证件类型仅支持73-统一社会信用代码
 * 此鉴权用户可以分为2类：1、纯个人 2、个体工商户
*/
class BindUnionPayWithCheckCorp extends Service
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
     * 客户真实姓名
    */
    public $MemberName = '';

    /**
     * @var string MemberGlobalType 会员证件类型 string(2) 必输
     * 详见《接口证件类型说明》，仅支持1-身份证；3-港澳回乡证；5-台胞证;4-中国护照;19-外国护照
     * 1、个体工商户此信息默认为法人信息,是否是法人字段上送2否时，该信息是代办人信息
     * 2、会员为纯个人时，证件类型仅支持1/3/4/5/19。为个体工商户时仅支持1
    */
    public $MemberGlobalType = '';

    /**
     * @var string 会员证件号码 string(20) 必输
     * 身份证号码
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
     * 若大小额行号不填则送超级网银号对应的银行名称，若填大小额行号则送大小额行号对应的银行名称
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
     * 手机号，此为接收短信验证码的手机号 测试送11个1
    */
    public $Mobile = '';

    /**
     * @var string IndivBusinessFlag 个体工商户标志 string(1) 可选
     * 1:是 2:否
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
     * 个体工商户必输，可与交易网会员代码相同
    */
    public $ShopId = '';

    /**
     * @var string ShopName 店铺名称 string(120) 可选
     * 个体工商户必输
    */
    public $ShopName = '';

    /**
     * @var string RepFlag 会员名称是否是法人 string(1) 可选
     * 1-是  2-否（个体工商户必输）
    */
    public $RepFlag = '';

    /**
     * @var string ReprName 法人名称 string(120) 可选
     * 会员名称是否是法人RepFlag为2时必输
    */
    public $ReprName = '';

    /**
     * @var string ReprGlobalType 法人证件类型 string(32) 可选
     * 会员名称是否是法人RepFlag为2时必输,仅支持1-身份证；
    */
    public $ReprGlobalType = '';

    /**
     * @var string ReprGlobalId 法人证件号码 string(32) 可选
     * 会员名称是否是法人RepFlag为2时必输
    */
    public $ReprGlobalId = '';

    /**
     * @var string Flag 标志（未启用） string(120) 可选
    */
    public $Flag = '';

    /**
     * @var string AuthFlag 鉴权标志 string(1) 可选
     * 1：三要素 2：四要素
    */
    public $AuthFlag = '';
}
