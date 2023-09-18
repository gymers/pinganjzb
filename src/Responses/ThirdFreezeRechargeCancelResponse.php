<?php

namespace Gymers\PinganJzb\Responses;

class ThirdFreezeRechargeCancelResponse extends Response
{
    /**
     * @var string JzbAcceptSeqNo 见证受理流水号 string(32)
     * 电商见证宝系统生成的流水号
    */
    public $JzbAcceptSeqNo = '';
}
