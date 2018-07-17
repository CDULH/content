<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
	protected $dateFormat = 'U';
	
	/**
	 * 查询一条
	 * @param $where
	 * @return Model|null|static
	 */
	public function getOne ( $where )
	{
		try {
			return $this->where( $where )->firstOrFail();
		} catch ( \Exception $e ) {
			return null;
		}
	}
	
	/**
	 * 查询多条（分页）
	 * @param $where
	 * @return \Illuminate\Contracts\Pagination\Paginator|null
	 */
	public function getList($where){
		try {
			return $this->where( $where )->orderBy('id', 'desc')->simplePaginate( 10 );
		} catch ( \Exception $e ) {
			return null;
		}
	}
	
	/***
	 * 获取所有
	 * @param array $where
	 * @return \Illuminate\Database\Eloquent\Collection|null|static[]
	 */
	public function getAll ($where = [])
	{
		try {
			return $this->get();
		} catch ( \Exception $e ) {
			return null;
		}
	}
	
	/**
	 * 删除
	 * @param $id
	 * @return bool
	 */
	public function deleteOne ( $id )
	{
		$obj = $this->where( 'id', $id )->first();
		$re      = $obj->delete();
		if ( !$re ) return false;
		
		return true;
	}
	
}
