<?php

namespace App\Http\Controllers\admin;

use App\Eloquent\Content;
use App\Http\Requests\ContentRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends BaseController
{
	protected $Content;
	
	public function __construct (Content $content)
	{
		parent::__construct();
		
		$this->Content = $content;
		
	}
	
	/***
	 * 文章列表
	 */
	public function index (Request $request)
	{
		$list = $this->Content->getList( [] );
		return view( 'content.index', ['list' => $list, 'title' => '文章',] );
	}
	
	/**
	 * 文章编辑
	 */
	public function modify (Request $request, $id)
	{
		if ( $id )
			$data = $this->Content->getOne( [['id', $id]] );
		else
			$data = [];
		
		return view( 'content.modify', ['title' => '文章', 'data' => $data] );
	}
	
	public function modifyPost (ContentRequest $request)
	{
	
	}
	
	public function remove (Request $request)
	{
	
	}
}
