<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type';
    
    public function getAll($where){
		try {
			return $this->where( $where )->get();
		} catch ( \Exception $e ) {
			return [];
		}
	}
}
