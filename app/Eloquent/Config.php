<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
	protected $table = 'config';
	
	protected $dateFormat = 'U';
	
	public function getOne ( $where )
	{
		try {
			return $this->where( $where )->firstOrFail();
		} catch ( \Exception $e ) {
			return null;
		}
	}
	
	public function getList($where){
		try {
			return $this->where( $where )->simplePaginate( 10 );
		} catch ( \Exception $e ) {
			return null;
		}
	}
	
	public function saveOne($data){
		$id = $data['id'];
		if( $id ){
			$config = $this->where('id', $id)->first();
		}else{
			$config = $this;
		}
		
		$config->k = $data['k'];
		$config->v = $data['v'];
		
		$re = $config->save();
		if( !$re ) return false;
		
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
}
