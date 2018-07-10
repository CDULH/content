<?php
/**
 * 自定义函数方法
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/6
 * Time: 16:40
 */
use \Illuminate\Support\Facades\Session;

//返回json格式数据
function returnJsonData ($data)
{
	return json_encode( $data );
}

//响应json请求格式数据
function responseJsonData ($code = 0, $msg = '', $data = null)
{
	$arr = ['code' => $code, 'msg' => $msg, 'data' => $data,];
	
	return response()->json( $arr );
}

//获取管理员密码加密数据
function getEncryptionString ($string, $salt)
{
	if ( !$string || !$salt ) return false;
	
	return md5( $string . md5( $string . $salt ) . $salt );
}

function adminSessionPut($key, $value){
	Session::put($key, $value);
	Session::save();
}

function adminSessionGet($key){
	return Session::get($key);
}

function adminSessionForget($key){
	return Session::forget($key);
}