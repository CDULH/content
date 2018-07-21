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
function returnJsonData ( $data )
{
	return json_encode( $data );
}

//响应json请求格式数据
function responseJsonData ( $code = 0, $msg = '', $data = null )
{
	$arr     = [ 'code' => $code, 'msg' => $msg, 'data' => $data, ];
	$request = new \Illuminate\Http\Request();
	apiLog( $code, $request->path(), '', '', $request->all() ? $request->all() : '', $data ? $data : '', $msg );
	return response()->json( $arr );
}

//获取管理员密码加密数据
function getEncryptionString ( $string, $salt )
{
	if ( !$string || !$salt ) return false;

	return md5( $string . md5( $string . $salt ) . $salt );
}

function adminSessionPut ( $key, $value )
{
	Session::put( $key, $value );
	Session::save();
}

function adminSessionGet ( $key )
{
	return Session::get( $key );
}

function adminSessionForget ( $key )
{
	return Session::forget( $key );
}

function getImgurl ( $id )
{
	$data = \App\Eloquent\File::where( 'id', $id )->first();
	return "http://" . $_SERVER[ "SERVER_NAME" ] . '/storage/' . $data[ 'path' ];
}

/**
 * 以get方式提交请求
 * @param $url
 * @return bool|mixed
 */
function httpGet ( $url )
{
	$oCurl = curl_init();
	if ( stripos( $url, "https://" ) !== false ) {
		curl_setopt( $oCurl, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $oCurl, CURLOPT_SSL_VERIFYHOST, false );
		curl_setopt( $oCurl, CURLOPT_SSLVERSION, 1 );
	}
	curl_setopt( $oCurl, CURLOPT_URL, $url );
	curl_setopt( $oCurl, CURLOPT_RETURNTRANSFER, 1 );
	$sContent = curl_exec( $oCurl );
	$aStatus  = curl_getinfo( $oCurl );
	curl_close( $oCurl );
	if ( intval( $aStatus[ "http_code" ] ) == 200 ) {
		return $sContent;
	} else {
		return false;
	}
}

/**
 * 以post方式提交请求
 * @param string       $url
 * @param array|string $data
 * @return bool|mixed
 */
function httpPost ( $url, $data )
{
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_HEADER, false );
	curl_setopt( $ch, CURLOPT_POST, true );
	if ( is_array( $data ) ) {
		foreach ( $data as &$value ) {
			if ( is_string( $value ) && stripos( $value, '@' ) === 0 && class_exists( 'CURLFile', false ) ) {
				$value = new CURLFile( realpath( trim( $value, '@' ) ) );
			}
		}
	}
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
	$data = curl_exec( $ch );
	curl_close( $ch );
	if ( $data ) {
		return $data;
	}
	return false;
}

function apiLog ( $code = 0, $module = '', $controller = '', $action = '', $postParams = '', $returnParams = '', $msg = '' )
{
	//查看订单未支付已超时
	$data = [
		'code'          => $code,
		'module'        => $module,
		'controller'    => $controller,
		'action'        => $action,
		'post_params'   => $postParams,
		'return_params' => $returnParams,
		'msg'           => $msg,
	];

	$ApiLog = new \App\Eloquent\ApiLog();
	$ApiLog->saveOne( $data );
}

