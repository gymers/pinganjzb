<?php

namespace Gymers\PinganJzb\Responses;

class MemberTransactionResponse extends Response
{
    /**
     * @var string FrontSeqNo 见证系统流水号 string(16) Y
     * 即电商见证宝系统生成的流水号，可关联具体一笔请求
    */
    public $FrontSeqNo = '';
}
