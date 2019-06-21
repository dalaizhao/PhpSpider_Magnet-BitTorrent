<?php

namespace SurgicalFruit\common;


class ServerConst
{
    /** 主进程数, 一般为CPU的1至4倍，我的服务器大于1就报错*/
    const SERVER_WORKER_NUM = 4;
    /** 允许最大连接数, 不可大于系统ulimit -n的值*/
    const SERVER_MAX_REQUEST = 10000;
    /** 线程数*/
    const SERVER_MAX_PROCESS = 20;
    /** 自动查找间隔, 单位为毫秒*/
    const SERVER_AUTO_FIND_TIME = 10000;

    const SERVER_DISPATCH_MODE =2;

    const SERVER_DAEMONIZE =false;

    /** 长期在线node*/
    public static $bootstrap_nodes = array(
        array('router.bittorrent.com', 6881),
        array('dht.transmissionbt.com', 6881),
        array('router.utorrent.com', 6881),
        array('208.67.16.113', 8000),
    );
}