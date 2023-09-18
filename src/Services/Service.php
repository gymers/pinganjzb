<?php

namespace Gymers\PinganJzb\Services;

class Service
{
    /**
     * @var string FundSummaryAcctNo 资金汇总账号 string(32) Y
    */
    public $FundSummaryAcctNo = '';

    /**
     * @var string MrchCode 商户号 String(22) Y
    */
    public $MrchCode = '';

    /**
     * @var string CnsmrSeqNo 交易流水号 String(22) Y
     * 系统流水号，建议规范：用户短号（6位）+日期（6位）+随机编号（10位）平台也可自行定义，满足长度即可
    */
    public $CnsmrSeqNo = '';

    /**
     * @var string ReservedMsg 保留域 string(120) N
    */
    public $ReservedMsg = '';
}
