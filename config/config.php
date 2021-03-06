<?php
/**
 * Created by PhpStorm.
 * User: liuwen
 * Date: 18-12-3
 * Time: 上午10:15
 */

return [
    'app_debug' => 'true',

    'displayErrorDetails' => true, // 是否显示错误详情

    // 接口基础地址
    'base_url'  => 'http://api.saas.com',

    // 会话保持时间
    'session'   => 60 * 60 * 3,

    //数据库配置
    'database'  => [
        'driver'    => 'mysql',
        'host'      => '127.0.0.1',
        'database'  => 'wugu',
        'username'  => 'root',
        'password'  => 'root',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => 'wg_',
    ],

    // 跨域配置
    'cors'      => [
        'Origin'  => ['http://localhost:8080', 'http://127.0.0.1:9001', 'http://localhost:8081'],
        'Methods' => 'GET,POST,PUT,DELETE,HEAD,PATCH,OPTIONS',
        'Headers' => 'Origin,X-Requested-With,Content-Type,Accept,Authorization',
    ],

    // 日志配置
    'logger'    => [
        'name'  => 'slim-app',
        'path'  => __DIR__.'/../logs/app.log',
        'level' => \Monolog\Logger::DEBUG,
    ],

    // 身份认证
    'jwt'       => [
        'key'  => 'QWERTYUJHGFSDSDFJRERTY',
        'hash' => 'HS256',
    ],
];