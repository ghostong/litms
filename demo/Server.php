<?php

//autoload
require(dirname(__DIR__).'/vendor/autoload.php');

$server = new \Lit\LitMs\LitMsServer();

$server
    ->setHttpHost("0.0.0.0")    //设置监听host ip
    ->setHttpPort(9000)    //设置 监听端口
    ->setWorkerNum(10)    //设置 进程数量
    ->setWorkDir(__DIR__)    //设置项目目录
    ->setDaemonize(false)    //设置是否守护进程
    ->setOpenBaseDir(__DIR__)    //设置读取安全目录
    ->setOpenBaseDir(dirname(__DIR__).DIRECTORY_SEPARATOR."vendor")    //设置读取安全目录
    ->setLogFile("/tmp/litmsError.log")    //设置错误日志文件
    ->setLogLevel(0)    //设置输出错误等级
    ->setSlowLogFile("/tmp/litmsSlow.log")    //设置慢日志文件
    ->setSlowTimeOut(1)    //设置慢日志时间
    ->setDocumentRoot(__DIR__.DIRECTORY_SEPARATOR."Static")    //设置静态目录
    ->setAuthenticate(['user1'=>'123','user2'=>'234','user3'=>'345'])    //开启简单身份认证,设置用户名密码
    ->run();