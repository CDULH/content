<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class File extends Base
{
	//
	protected $table = 'file';

	public function saveOne ( $data, &$id = 0 )
	{
		$id = isset( $data[ 'id' ] ) ? $data[ 'id' ] : 0;
		if ( $id ) {
			$obj = $this->where( 'id', $id )->first();
		} else {
			$obj = $this;
		}

		$obj->path = $data[ 'path' ];

		$re = $obj->save();
		$id = $obj->id;
		if ( !$re ) return false;

		return true;
	}
}
