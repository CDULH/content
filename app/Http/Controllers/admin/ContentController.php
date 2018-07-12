<?php

namespace App\Http\Controllers\admin;

use App\Eloquent\Content;
use App\Eloquent\Type;
use App\Enum\ContentStatusEnum;
use App\Http\Requests\ContentRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends BaseController
{
	protected $Content;
	protected $Type;
	
	public function __construct ( Content $content, Type $type )
	{
		parent::__construct();
		$this->Content = $content;
		$this->Type    = $type;
		
	}
	
	/***
	 * 文章列表
	 */
	public function index ( Request $request )
	{
		$list = $this->Content->getList( [] );
		return view( 'content.index', [ 'list' => $list, 'title' => '文章', ] );
	}
	
	/**
	 * 文章编辑
	 */
	public function modify ( Request $request, $id = 0 )
	{
		if ( $id ) $data = $this->Content->getOne( [ [ 'id', $id ] ] ); else
			$data = [];
		
		$types = $this->Type->getAll( [] );
		
		return view( 'content.modify', [ 'title' => '文章', 'data' => $data, 'types' => $types, 'statuses' => ContentStatusEnum::getContentStatusArr() ] );
	}
	
	public function modifyPost ( ContentRequest $request )
	{
		$data = $request->all();
		$re   = $this->Content->saveOne( $data );
		if ( !$re ) return back();
		
		return response()->redirectTo( url( 'admin/content' ) );
	}
	
	public function remove ( Request $request, $id )
	{
		$re = $this->Content->deleteOne( $id );
		if ( !$id ) return back();
		
		return redirect()->route( 'content' );
	}
}
