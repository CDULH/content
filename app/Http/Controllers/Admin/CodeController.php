<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;

class CodeController extends Controller
{
	/***
	 * 获取验证码
	 * @param Request $request
	 * @param $id
	 * @return $this
	 */
    public function captcha( Request $request){
		$builder = new CaptchaBuilder();
		$builder->build(150,32);
		
		//验证码
		$code = $builder->getPhrase();
	
		$request->session()->flash("login_captche", $code);
		ob_clean(); //清除缓存
		return response($builder->output())->header('Content-type','image/jpeg');
	}
	
	/**
	 * 检查验证码
	 * @param Request $request
	 * @param $key
	 * @param $captcha
	 * @return bool
	 */
	public function check(Request $request, $key, $captcha){
    	$code = $request->session()->get($key);
    	if( $code != $captcha ){
    		return false;
		}
		
		return true;
	}
}
