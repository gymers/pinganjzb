<?php

namespace Gymers\PinganJzb\Responses;

class Response
{
    public function __construct($attribute)
    {
        foreach ($attribute as $k => $v) {
            $this->$k = $v;
        }
    }

    /**
     * @var string TxnReturnCode 返回码 String(20) Y
     * 映射返回码
     *
    */
    public $TxnReturnCode = '';

    /**
     * @var string TxnReturnMsg 返回信息 String(100)
     * 映射返回信息
    */
    public $TxnReturnMsg = '';

    /**
     * @var string CnsmrSeqNo 交易流水号 String(22)
     * 系统流水号，同输入
    */
    public $CnsmrSeqNo = '';

    /**
     * @var string ReservedMsg 保留域 string(120)
    */
    public $ReservedMsg = '';
}
