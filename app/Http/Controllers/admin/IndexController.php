<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

class IndexController extends BaseController
{
	public function __construct (Request $request)
	{
		
		return parent::__construct();
		// TODO: Change the autogenerated stub
	}
	
	//首页
	public function index(){
		return view('index.index');
	}
	
	//退出登陆
	public function logout(){
		adminSessionForget("managerData");
		adminSessionForget("auth");
		return redirect()->route("login");
	}
}
