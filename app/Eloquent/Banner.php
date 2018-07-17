<?php

namespace App\Eloquent;

class Banner extends Base
{
	protected $table = 'banner';
	
	public function saveOne ( $data )
	{
		$id = $data[ 'id' ];
		if ( $id ) {
			$banner = $this->where( 'id', $id )->first();
		} else {
			$banner = $this;
		}
		
		$banner->title   = $data[ 'title' ];
		$banner->sort    = $data[ 'sort' ];
		$banner->path    = $data[ 'path' ];
		$banner->channel = $data[ 'channel' ];
		
		$re = $banner->save();
		if ( !$re ) return false;
		
		return true;
	}
}
