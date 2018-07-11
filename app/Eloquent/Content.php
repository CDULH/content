<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
	protected $table = 'content';
	
	protected $dateFormat = 'U';
	
	public function getCreatedAtAttribute ( $value )
	{
		return date( 'Y-m-d H:i:s', $value );
	}
	
	public function setCreatedAtAttribute ( $value )
	{
		$this->attributes[ 'created_at' ] = strtotime( $value );
	}
	
	public function getUpdatedAtAttribute ( $value )
	{
		return date( 'Y-m-d H:i:s', $value );
	}
	
	public function setUpdatedAtAttribute ( $value )
	{
		$this->attributes[ 'updated_at' ] = strtotime( $value );
	}
	
	public function getList ( $where )
	{
		try {
			return $this->where( $where )->simplePaginate( 10, [ '*' ] );
		} catch ( \Exception $e ) {
			
			return [];
		}
	}
	
	public function type ()
	{
		return $this->belongsTo( 'App\Eloquent\Type', 'type_id' );
	}
	
	public function getOne ( $array )
	{
		try {
			return $this->where( $array )->firstOrFail( [ '*' ] );
		} catch ( \Exception $e ) {
			return [];
		}
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
	
	//删除
	public function deleteOne ( $id )
	{
		$content = $this->where( 'id', $id )->first();
		$re      = $content->delete();
		if ( !$re ) return false;
		
		return true;
	}
}
