<?php

namespace Gymers\PinganJzb\Responses;

class ReconciliationDocumentQueryResponse extends Response
{
    /**
     * @var string ResultNum 本次交易返回查询结果记录数 string(8)
    */
    public $ResultNum = '';

    /**
     * @var array TranItemArray 交易信息数组
     * START
     * FileName 文件名称 string(120)
     * RandomPassword 随机密码 string(120)
     * FilePath 文件路径 string(512)
     * DrawCode 提取码 string(64)
     * END
    */
    public $TranItemArray = [];
}
