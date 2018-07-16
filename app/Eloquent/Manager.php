<?php

namespace App\Eloquent;

class Manager extends Base
{
	protected $table = 'manager';
	
	public function role(){
		return $this->belongsTo('App\Eloquent\ManagerRole', 'role_id');
	}
	
	public function saveOne ( $data )
	{
		$id = $data[ 'id' ];
		if ( $id ) {
			$config = $this->where( 'id', $id )->first();
			$salt = $config->salt;
		} else {
			$config = $this;
			$salt   = mt_rand( 100000, 999999 );
		}
		
		if ( isset( $data[ 'role_id' ] ) ) $config->role_id = $data[ 'role_id' ];
		if ( isset( $data[ 'nickname' ] ) ) $config->nickname = $data[ 'nickname' ];
		if ( isset( $data[ 'auth_access' ] ) ) $config->auth_access = $data[ 'auth_access' ];
		if ( isset( $data[ 'username' ] ) ) $config->username = $data[ 'username' ];
		if ( isset( $data[ 'password' ] ) ) $config->password = getEncryptionString($data[ 'password' ], $salt);
		if ( isset( $data[ 'phone' ] ) ) $config->phone = $data[ 'phone' ];
		if ( isset( $salt ) ) $config->salt = $salt;
		if ( isset( $data[ 'enable' ] ) ) $config->enable = $data[ 'enable' ];
		if ( isset( $data[ 'last_login_time' ] ) ) $config->last_login_time = $data[ 'last_login_time' ];
		
		$re = $config->save();
		if ( !$re ) return false;
		
		return true;
	}
	
}
