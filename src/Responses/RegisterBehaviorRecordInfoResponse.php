<?php

namespace Gymers\PinganJzb\Responses;

class RegisterBehaviorRecordInfoResponse extends Response
{
    /**
     * @var string ReinSuccessFlag 补录是否成功标志 string(2) N
     * 功能标志为2时必输，S-成功 F-失败
    */
    public $ReinSuccessFlag = '';

    /**
     * @var string CompanyName 单位名称 string(120) N
     * 功能标志为2时且商户为非自然人必输。
    */
    public $CompanyName = '';

    /**
     * @var string CompanyGlobalType 公司证件类型 string(2) N
     * 功能标志为2时且商户为非自然人必输。73-统一社会信用代码证号
    */
    public $CompanyGlobalType = '';

    /**
     * @var string CompanyGlobalId 公司证件号码 string(32) N
     * 功能标志为2时且商户为非自然人必输。
    */
    public $CompanyGlobalId = '';

    /**
     * @var string ReprName 法人名称 string(120) N
     * 功能标志为2时且商户为非自然人必输。
    */
    public $ReprName = '';

    /**
     * @var string ReprGlobalType 法人证件类型 string(32) N
     * 功能标志为2时且商户为非自然人必输。1-身份证号
    */
    public $ReprGlobalType = '';

    /**
     * @var string ReprGlobalId 法人证件号码 string(32) N
     * 功能标志为2时且商户为非自然人必输。
    */
    public $ReprGlobalId = '';
}
