<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class File extends Base
{
    //
	protected $table = 'file';
	
	public function saveOne($data){
		$id = $data['id'];
		if( $id ){
			$obj = $this->where('id', $id)->first();
		}else{
			$obj = $this;
		}
		
		$obj->path = $data['path'];
		
		$re = $obj->save();
		if( !$re ) return false;
		
		return true;
	}
}
