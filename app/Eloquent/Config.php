<?php

namespace App\Eloquent;

class Config extends Base
{
	protected $table = 'config';
	
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
}
