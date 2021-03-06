<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 liuwave@qq.com All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：wxpay.php
 * ----------------------------------------------------------------------------
 * 功能描述：微信支付语言包
 * ----------------------------------------------------------------------------
 *
 * ----------------------------------------------------------------------------
 */

global $_LANG;
define("JS_QR",false);//是否用js 生成
define("WXPAY_DEBUG",false);
define("QUERY_INTERVAL",20);//以秒为单位，首次请求默认为20秒，效果最佳, 值越小，用户体验越好，服务器压力越大，反之用户体验越差，服务器压力越小。 推荐10

$_LANG['wxnative'] = '微信支付';
$_LANG['wxnative_desc'] = '微信支付，是基于客户端提供的服务功能。同时向商户提供销售经营分析、账户和资金管理的功能支持。用户通过扫描二维码、微信内打开商品页面购买等多种方式调起微信支付模块完成支付。';
$_LANG['wxnative_appid'] = '微信公众号AppId';
$_LANG['wxnative_appsecret'] = '微信公众号AppSecret';
$_LANG['wxnative_key'] = '商户支付密钥Key';
$_LANG['wxnative_mchid'] = '商户ID';
$_LANG['wxnative_button'] = '立即用微信支付';
