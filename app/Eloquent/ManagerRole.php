<?php

namespace App\Eloquent;

class ManagerRole extends Base
{
	protected $table = 'manager_role';
	
	public function saveOne ( $data )
	{
		$id = $data[ 'id' ];
		if ( $id ) {
			$config = $this->where( 'id', $id )->first();
		} else {
			$config = $this;
		}
		
		if ( isset( $data[ 'role' ] ) ) $config->role = $data[ 'role' ];
		if ( isset( $data[ 'description' ] ) ) $config->description = $data[ 'description' ];
		if ( isset( $data[ 'auth_access' ] ) ) $config->auth_access = $data[ 'auth_access' ];
		
		
		$re = $config->save();
		if ( !$re ) return false;
		
		return true;
	}
}
