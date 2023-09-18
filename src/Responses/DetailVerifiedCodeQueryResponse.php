<?php

namespace Gymers\PinganJzb\Responses;

class DetailVerifiedCodeQueryResponse extends Response
{
    /**
     * @var string OldFrontSeqNo 原前置流水号 string(32)
    */
    public $OldFrontSeqNo = '';

    /**
     * @var string DetailCheckCode 明细单验证码 string(20)
    */
    public $DetailCheckCode = '';
}
