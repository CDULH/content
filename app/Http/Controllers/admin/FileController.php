<?php

namespace App\Http\Controllers\Admin;

use App\Eloquent\Banner;
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

	public function modifyPost ( Request $request )
	{
		if ( $request->hasFile( "file" ) ) {
			if ( $request->file( 'file' )->isValid() ) {
				$path = $request->file( 'file' )->store( "image", 'public' );
			}

			if ( isset( $path ) && $path ) {
				$id = 0;
				$re = $this->obj->saveOne( [ 'path' => $path ], $id );
				if ( !$re ) return responseJsonData( 1, '上传失败' );

				return responseJsonData( 0, '', [ 'path' => "http://" . $request->server()[ "SERVER_NAME" ] . '/storage/' . $path, 'id' => $id ] );
			}

		} else {
			return responseJsonData( 1, '缺少参数' );
		}

	}

	public function remove ( Request $request )
	{
		$id = $request->get( 'id', 0 );

		if ( !$id ) {
			return responseJsonData( 1, '参数错误' );
		}

		$re = $this->obj->deleteOne( $id );
		if ( !$id ) return responseJsonData( 1, '删除失败' );

		if( Banner::where('file_id', $id)->first() ){
			Banner::where('file_id', $id)->update(['file_id'=>0]);
		}

		return responseJsonData();
	}

}
