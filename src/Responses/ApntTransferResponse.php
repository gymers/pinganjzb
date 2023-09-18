<?php

namespace Gymers\PinganJzb\Responses;

class ApntTransferResponse extends Response
{
    /**
     * @var string WitnessSysSeqNo 见证系统流水号 string(32) Y
     * 即电商见证宝系统生成的流水号，可关联具体一笔请求
    */
    public $WitnessSysSeqNo = '';

    /**
     * @var string HoldOne 预留字段1 string(120) N
    */
    public $HoldOne = '';

    /**
     * @var string HoldTwo 预留字段2 string(120) N
    */
    public $HoldTwo = '';
}
