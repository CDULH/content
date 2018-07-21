<?php

namespace App\Http\Controllers\Admin;

use App\Eloquent\Banner;
use App\Enum\BannerChannelEnum;
use App\Http\Requests\BannerRequest;
use App\Http\Requests\ConfigRequest;
use Illuminate\Http\Request;

class BannerController extends BaseController
{
	protected $Banner;
	
	public function __construct ( Banner $banner )
	{
		parent::__construct();
		$this->Banner = $banner;
	}
	
	
	public function index ()
	{
		$list = $this->Banner->getList( [] );
		return view( 'banner.index', [
			'list'     => $list,
			'title'    => 'banner',
			'channels' => BannerChannelEnum::getBannerChannelArr()
		] );
	}
	
	/**
	 * 编辑
	 */
	public function modify ( Request $request, $id = 0 )
	{
		if ( $id )
			$data = $this->Banner->getOne( [ [ 'id', $id ] ] );
		else
			$data = [];

		return view( 'banner.modify', [ 'title' => 'banner', 'data' => $data, 'channels' => BannerChannelEnum::getBannerChannelArr() ] );
	}
	
	public function modifyPost ( BannerRequest $request )
	{
		$data = $request->all();
		$re   = $this->Banner->saveOne( $data );
		if ( !$re ) return back();
		
		return response()->redirectTo( url( 'admin/banner' ) );
	}
	
	public function remove ( Request $request, $id )
	{
		$re = $this->Banner->deleteOne( $id );
		if ( !$id ) return back();
		
		return redirect()->route( 'banner' );
	}
	
}
