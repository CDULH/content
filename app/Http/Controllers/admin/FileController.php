<?php

namespace App\Http\Controllers\Admin;

use App\Eloquent\Config;
use App\Eloquent\File;
use App\Http\Requests\ConfigRequest;
use Illuminate\Http\Request;

class FileController extends BaseController
{
	protected $obj;
	
	public function __construct ( File $obj )
	{
		parent::__construct();
		$this->obj = $obj;
	}

	public function modifyPost ( ConfigRequest $request )
	{
		$data = $request->all();
		$file = $request->file();
		var_dump($file);exit;
		
		
		
		$re   = $this->obj->saveOne( $data );
		if ( !$re ) return commonReturnJson(1, '上传失败');
		
		return commonReturnJson();
	}
	
	public function remove ( Request $request, $id )
	{
		$re = $this->obj->deleteOne( $id );
		if ( !$id ) return commonReturnJson(1, '删除失败');
		
		return commonReturnJson();
	}
	
}
