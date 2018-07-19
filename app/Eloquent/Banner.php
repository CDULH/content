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
		$banner->file_id    = $data[ 'file_id' ];
		$banner->channel = $data[ 'channel' ];
		
		$re = $banner->save();
		if ( !$re ) return false;
		
		return true;
	}
	
	public function file(){
		return $this->hasOne("App\Eloquent\File", 'id', 'file_id');
	}
}
