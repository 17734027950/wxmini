<?php
/**
* 	配置账号信息
*   注意:BeeCloud 结合自身系统修改了微信配置
*/

class WxPayConf_pub {
	//=======【基本信息设置】=====================================
	//微信公众号身份的唯一标识。审核通过后，在微信发送的邮件中查看
    //或者微信小程序的APPID，可在小程序后台设置－开发设置内查看
	const APPID = '';
	//受理商ID，身份标识
	const MCHID = '';
	//商户支付密钥Key。审核通过后，在微信发送的邮件中查看
	const KEY = '';
	//JSAPI接口中获取openid，审核后在公众平台开启开发模式后可查看
    //或者微信小程序的APPSECRET，可在小程序后台设置－开发设置内查看
	const APPSECRET = '';

	//=======【JSAPI路径设置】===================================
	//获取access_token过程中的跳转uri，通过跳转将code传入jsapi支付页面
	const JS_API_CALL_URL = 'http://www.example.com';

	//=======【curl超时设置】===================================
	//本例程通过curl使用HTTP POST方法，此处可修改其超时时间，默认为30秒
	const CURL_TIMEOUT = 30;
}
	
?>