<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6273
 * 交易终态查询
 *
 * 查询对应的交易终态（仅支持6267 6268 6269 6270 6271 6272且只支持7天内数据查询）
*/
class TraFinalStatusQuery extends Service
{
    /**
     * @var string OldThirdSeqNo 原第三方流水号 string(64) Y
     * 原第三方流水号和原见证受理流水号必输其一
    */
    public $OldThirdSeqNo = '';

    /**
     * @var string OldJzbAcceptSeqNo 原见证受理流水号 string(32) Y
     * 原第三方流水号和原见证受理流水号必输其一
    */
    public $OldJzbAcceptSeqNo = '';
}
