<?php

namespace Gymers\PinganJzb\Services;

/**
 * KFEJZB6103
 * 查询对账文件信息
 *
 * 平台调用该接口获取需下载对账文件的文件名称以及密钥。 平台获取到信息后， 可以再调用OPENAPI的文件下载功能
*/
class ReconciliationDocumentQuery extends Service
{
    /**
     * @var string FileType 文件类型 string(2) Y
     * 充值文件-CZ
     * 提现文件-TX
     * 交易文件-JY
     * 余额文件-YE
     * 鉴权文件-JQ
     * POS文件-POS
     * 分账文件-FZ
     * 资金汇总账户明细文件-JG
     * 平台归集账户明细文件-GJ
    */
    public $FileType = '';

    /**
     * @var string FileDate 文件日期 string(8) Y
     * 文件日期不能超过查询交易当天日期
    */
    public $FileDate = '';
}
