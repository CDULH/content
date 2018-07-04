<?php

namespace App\Http\Controllers\admin;

use App\Eloquent\Manager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	protected $Model;

	public function __construct ( Manager $manager )
	{
		$this->Model = $manager;
	}

	//登录
	public function login ( Request $request )
	{
		if ( $request->isMethod( "post" ) ) {
			$username = $request->get( 'username', '' );
			$password = $request->get( 'password', '' );
			$data = $this->Model->getOne( [ [ 'username', $username ] ] );
			var_dump($data);
		} else {
			return view( 'login.login', [ 'title' => '文件管理系统' ] );
		}
	}

}
