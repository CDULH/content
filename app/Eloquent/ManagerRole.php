<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class ManagerRole extends Model
{
	protected $table = 'manager_role';
	
	protected $dateFormat = 'U';
	
	public function getOne ( $where )
	{
		try {
			return $this->where( $where )->firstOrFail();
		} catch ( \Exception $e ) {
			return null;
		}
	}
	
	public function getList ( $where )
	{
		try {
			return $this->where( $where )->simplePaginate( 10 );
		} catch ( \Exception $e ) {
			return null;
		}
	}
	
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
	
	//删除
	public function deleteOne ( $id )
	{
		$content = $this->where( 'id', $id )->first();
		$re      = $content->delete();
		if ( !$re ) return false;
		
		return true;
	}
	
	public function getAll ()
	{
		try {
			return $this->get();
		} catch ( \Exception $e ) {
			return null;
		}
	}
}
