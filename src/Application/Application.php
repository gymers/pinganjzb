<?php

namespace Gymers\PinganJzb\Application;

use Gymers\PinganJzb\Exceptions\ResponseException;
use Gymers\PinganJzb\Exceptions\ServiceException;
use Gymers\PinganJzb\Responses\Response;
use Gymers\PinganJzb\Services\Service;

class Application
{
    public $config;

    public $PABankSDK;

    public function __construct(Config $config)
    {
        $this->config = $config;

        if (!defined('JAVA_HOSTS')) {
            define('JAVA_HOSTS', $this->config->java_hosts ?? '127.0.0.1:8081');
        }

        require_once dirname(__FILE__).'/java.inc.php';

        $this->PABankSDK = Java('com.pabank.sdk.PABankSDK');

        $this->PABankSDK->init($config->properties_path);

        $this->PABankSDK->getInstance()->approveDev();
    }

    public function request(object $service)
    {
        $namespaces = explode('\\', get_class($service));

        $service_id = array_pop($namespaces);

        if (!$service instanceof Service) {
            throw new ServiceException($service_id);
        }

        $service->FundSummaryAcctNo = $service->FundSummaryAcctNo ?: $this->config->FundSummaryAcctNo;
        $service->MrchCode = $service->MrchCode ?: $this->config->MrchCode;
        $service->CnsmrSeqNo = $service->CnsmrSeqNo ?: $this->config->uid.date('ymd').substr(microtime(true) * 10000, 4);
        foreach ($service as $k => $v) {
            if ('' === $v) {
                unset($service->$k);
            }
        }

        $request = json_encode((array) $service);
        $response = java_values($this->PABankSDK->getInstance()->apiInter($request, $service_id));

        if (isset($this->config->response_type) && 'object' == $this->config->response_type) {
            $classname = '\\Gymers\\PinganJzb\\Responses\\'.$service_id.'Response';
            $response = new $classname($response);
            if (!$response instanceof Response) {
                throw new ResponseException($service_id.'Response');
            }
        }

        return $response;
    }
}
