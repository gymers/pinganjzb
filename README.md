# 平安银行见证宝sdk

## 概览

基于**java-bridge**搭建的php版本的平安银行见证宝开发库

## 环境要求

php >= 7.1

## 安装

```shell
composer require gymers/pinganjzb
```

## 开始

- 复制平安银行jar包到服务器jdk环境**\jre\lib\ext**目录

- 自定义目录

- 将lib目录里面**JavaBridge.jar**复制到自定义目录

- 新建conf目录(这个目录可在配置文件中查看，也可自定义)与**JavaBridge.jar**同级

- 复制平安银行证书到conf目录

## 启动

```shell
java -jar JavaBridge.jar SERVLET_LOCAL:8081(自定义端口)
```

## 示例程序：查询资金汇总账户余额

```php
<?php
    $config = [
        'java_hosts' => '127.0.0.1:8081',  // 主机+启动端口
        'java_log_level' => 2, //日志级别
        'properties_path' => '', // 配置文件路径
        'FundSummaryAcctNo' => '',  // 资金汇总账号
        'MrchCode' => '',  // 商户号（4位）
        'uid' => '', // 用户短号（6位、可在配置文件中查看）
        'response_type' => 'object',  // 返回类型：支持object、array选项（默认array）
	];

	$service = new SupAcctIdBalanceQuery();（对应平安银行服务ID）

	$response = PinganJzb::config($config)->request($service);
```

## 更多例子

可参考phpunit单元测试用例