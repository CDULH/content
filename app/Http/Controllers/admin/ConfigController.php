<?php

namespace App\Http\Controllers\Admin;

use App\Eloquent\Config;
use App\Http\Requests\ConfigRequest;
use Illuminate\Http\Request;

class ConfigController extends BaseController
{
	protected $Config;
	
	public function __construct ( Config $config )
	{
		parent::__construct();
		$this->Config = $config;
	}
	
	
	public function index ()
	{
		$list = $this->Config->getList( [] );
		return view( 'config.index', [
			'list'  => $list,
			'title' => '配置'
		] );
	}
	
	/**
	 * 文章编辑
	 */
	public function modify ( Request $request, $id = 0 )
	{
		if ( $id )
			$data = $this->Config->getOne( [ [ 'id', $id ] ] );
		else
			$data = [];
		
		return view( 'config.modify', [ 'title' => '配置', 'data' => $data ] );
	}
	
	public function modifyPost ( ConfigRequest $request )
	{
		$data = $request->all();
		$re   = $this->Config->saveOne( $data );
		if ( !$re ) return back();
		
		return response()->redirectTo( url( 'admin/config' ) );
	}
	
	public function remove ( Request $request, $id )
	{
		$re = $this->Config->deleteOne( $id );
		if ( !$id ) return back();
		
		return redirect()->route( 'config' );
	}
	
}
