<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
	const CREATED_AT = 'create_time';

	const UPDATED_AT = null;

	//
	protected $table = 'manager';

	protected $dates = [ 'create_time' ];

	protected $dateFormat = 'U';

	public function getCreateTimeAttribute ( $value )
	{
		return date( 'Y-m-d', $value );
	}

	public function getOne ( $where )
	{
		try {
			return $this->where( $where )->firstOrFail( [ '*' ] )->toArray();
		} catch ( \Exception $e ) {
			return null;
		}
	}
}
