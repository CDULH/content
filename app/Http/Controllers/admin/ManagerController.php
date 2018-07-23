<?php

namespace App\Http\Controllers\Admin;

use App\Eloquent\Manager;
use App\Eloquent\ManagerRole;
use App\Http\Requests\ManagerRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerController extends BaseController
{
	protected $Manager;
	protected $ManagerRole;
	
	public function __construct ( Manager $manager, ManagerRole $managerRole )
	{
		parent::__construct();
		$this->Manager     = $manager;
		$this->ManagerRole = $managerRole;
	}
	
	
	public function index ()
	{
		$list = $this->Manager->getList( [] );
		return view( 'manager.index', [
			'list'  => $list,
			'title' => '管理员账号'
		] );
	}
	
	/**
	 * 文章编辑
	 */
	public function modify ( Request $request, $id = 0 )
	{
		if ( $id )
			$data = $this->Manager->getOne( [ [ 'id', $id ] ] );
		else
			$data = [];
		
		$role = $this->ManagerRole->getAll();
		return view( 'manager.modify', [ 'title' => '账号', 'data' => $data, 'roles' => $role ] );
	}
	
	public function modifyPost ( ManagerRequest $request )
	{
		$data = $request->all();
		$re   = $this->Manager->saveOne( $data );
		if ( !$re ) return back();
		
		return response()->redirectTo( url( 'admin/manager' ) );
	}
	
	public function remove ( Request $request, $id )
	{
		$re = $this->Manager->deleteOne( $id );
		if ( !$id ) return back();
		
		return redirect()->route( 'manager' );
	}
	
}
