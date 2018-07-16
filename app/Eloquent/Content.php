<?php

namespace App\Eloquent;

class Content extends Base
{
	protected $table = 'content';
	
	public function type ()
	{
		return $this->belongsTo( 'App\Eloquent\Type', 'type_id' );
	}
	
	//编辑
	public function saveOne ( $data )
	{
		if ( $data[ 'id' ] ) {
			$content = $this->where( 'id', $data[ 'id' ] )->first();
		} else {
			$content = $this;
		}
		
		$content->title   = $data[ 'title' ];
		$content->content = $data[ 'content' ];
		$content->author  = $data[ 'author' ];
		$content->status  = $data[ 'status' ];
		$content->type_id = $data[ 'type_id' ];
		
		$re = $content->save();
		if ( !$re ) return false;
		
		return true;
	}
}
