<?php
/**
 *  配置文件
 */

date_default_timezone_set('PRC'); //本服务器默认东八区

$GLOBALS['config'] = array();

$GLOBALS['config']['debug'] = true; //是否开启调试

//URL
$GLOBALS['config']['wwwUrl']    = "http://www.mysite.com/";
$GLOBALS['config']['adminUrl']  = $GLOBALS['config']['wwwUrl'] . "admincp/";
$GLOBALS['config']['mobileUrl'] = $GLOBALS['config']['wwwUrl'] . "m/";
$GLOBALS['config']['staticUrl'] = $GLOBALS['config']['wwwUrl'] . "static/";
$GLOBALS['config']['uploadUrl'] = $GLOBALS['config']['wwwUrl'] . "static/upload/";
$GLOBALS['config']['weixinUrl'] = $GLOBALS['config']['wwwUrl'] . "weixin/";

$GLOBALS['config']['cookieDomain'] = "mysite.com";

$GLOBALS['config']['siteName']     = "网站名称";
$GLOBALS['config']['corpName']     = "企业名称";

//mysql
$GLOBALS['config']['mysql'] = array(
    'database' => 'database',
    'master' => array(
        'host'     => '127.0.0.1',
        'userName' => 'root',
        'passwd'   => 'root',
        'port'     => '3306',
    ),
    'slave' => array(
        'host'     => array("127.0.0.1"),
        'userName' => 'root',
        'passwd'   => 'root',
        'port'     => '3306',
    ),
);

//memcache
$GLOBALS['config']['memcache'] = array(
    array(
        'host'   => "localhost",
        'port'   => "11211",
        'weight' => 1,
    )
);

// 微信公众号/开放平台配置
$GLOBALS['config']['wechat'] = array(
    //开放平台
    'open'=>array(
        'appId'     => '',
        'appSecret' => '',
        'token'     => '',
    ),
    //微信支付
    'pay'=>array(
        'appId'     => '',
        'mchId'     => '',
        'key'       => '',
        'appSecret' => '',
    ),
    //微信公众号配置
    'pay'=>array(
        'appId'     => '',
        'appSecret' => '',
        'token'     => '',
    ),
);

//短信配置
$GLOBALS['config']['sms'] = array(
    'apiKey'     => '',
    'expireTime' => '',
    'templateId' => '',
);

//小米推送
$GLOBALS['config']['xmpush'] = array(
    'iphone' => array(
        'appId'     => '',
        'appKey'    => '',
        'appSecret' => '',
        'bundleId'  => '',
    ),
);

//mail php mail/smtp mail
$GLOBALS['config']['email'] = array(
    'name'     => "邮件对外展示名称",
    'host'     => "smtp.exmail.qq.com", //smtp
    'mail'     => "noreply@mysite.com", //smtp and phpmail
    'password' => "xxxxx", //smtp
    'port'     => "465", //smtp
);


if($GLOBALS['config']['debug']){
    ini_set("display_errors", "on");
    error_reporting(E_ALL ^ E_NOTICE);
}else{
    ini_set("display_errors", "off");
    error_reporting(0);
}

