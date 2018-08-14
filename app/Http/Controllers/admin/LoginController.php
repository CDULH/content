<?php

namespace App\Http\Controllers\Admin;

use App\Logic\ManagerLogic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
	protected $ManagerLogic;
	
	public function __construct (ManagerLogic $logic)
	{
		$this->ManagerLogic = $logic;
	}
	
	//登录
	public function login (Request $request)
	{
		if ( $request->isMethod( "post" ) ) {
			$username = $request->get( 'username', '' );
			$password = $request->get( 'password', '' );
			$verify = $request->get( 'verify', 'sssss' );
			
			if( !$verify || !$username || !$password ){
				return responseJsonData(1, '参数缺失');
			}
			
			$code = $request->session()->get("login_captche");
			if( $code != $verify ){
				return responseJsonData(1, '验证码错误');
			}
			
			$msg = '';
			$re = $this->ManagerLogic->login( $username, $password, $msg );
			if ( !$re ) return responseJsonData( 1, $msg ? $msg : '登陆失败' );
			
			return responseJsonData();
			
		} else {
			return view( 'login.login', ['title' => '文件管理系统'] );
		}
	}
	
}
