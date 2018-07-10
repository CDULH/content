<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
	protected $table = 'content';
	
	CONST UPDATED_AT = NULL;
	
	protected $dataFormat = 'U';
	
	public function getCreatedAtAttribute ($value)
	{
		return date( 'Y-m-d H:i:s', $value );
	}
	
	public function getList($where){
		try {
			return $this->where( $where )->simplePaginate( 1, ['*'] );
		} catch ( \Exception $e ) {
			
			return [];
		}
	}
	
	public function type(){
		return $this->belongsTo('App\Eloquent\Type', 'type_id');
	}
	
	public function getOne ($array) {
		try {
			return $this->where( $array )->firstOrFail(['*']);
		} catch ( \Exception $e ) {
			return [];
		}
	}
}
