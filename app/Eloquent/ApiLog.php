<?php

namespace App\Eloquent;

class ApiLog extends Base
{
	protected $table = 'api_log';
	
	const CREATED_AT = 'created';
	
	const UPDATED_AT = null;
	
	public function saveOne ( $data )
	{
		$this->code          = $data[ 'code' ];
		$this->module        = $data[ 'module' ];
		$this->controller    = $data[ 'controller' ];
		$this->action        = $data[ 'action' ];
		$this->post_params   = is_array( $data[ 'post_params' ] ) ? json_encode( $data[ 'post_params' ] ) : $data[ 'post_params' ];
		$this->return_params = is_array( $data[ 'return_params' ] ) ? json_encode( $data[ 'return_params' ] ) : $data[ 'return_params' ];
		$this->msg           = $data[ 'msg' ];
		
		$re = $this->save();
		if ( !$re ) return false;
		return true;
	}
}
