<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/10
 * Time: 10:58
 */

namespace App\Logic;


use Illuminate\Support\Facades\Session;

class ManagerLogic
{
	protected $Manager;
	
	public function __construct (\App\Eloquent\Manager $manager)
	{
		$this->Manager = $manager;
	}
	
	/***
	 * @return bool
	 */
	public function login ($username, $password, & $msg = '')
	{
		$data = $this->Manager->getOne( [['username', $username], ['enable', 1]] );
		if ( !$data ) {
			$msg = '账号不存在';
			return false;
		}
		
		if ( $data['password'] != getEncryptionString( $password, $data['salt'] ) ) {
			$msg = '密码错误';
			return false;
		}
		
		$session = ['id' => $data['id'], 'username' => $data['username'], 'supper_master' => $data['supper_master']];
		
		adminSessionPut( 'managerData', $session );
		
		return true;
	}
}