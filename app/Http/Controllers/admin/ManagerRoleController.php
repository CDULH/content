<?php

namespace App\Http\Controllers\Admin;

use App\Eloquent\ManagerRole;
use App\Enum\NavEnum;
use App\Http\Requests\ManagerRoleRequest;
use Illuminate\Http\Request;

class ManagerRoleController extends BaseController
{
	protected $ManagerRole;
	
	public function __construct ( ManagerRole $managerRole )
	{
		parent::__construct();
		$this->ManagerRole = $managerRole;
	}
	
	
	public function index ()
	{
		$list = $this->ManagerRole->getList( [] );
		return view( 'manager_role.index', [
			'list'  => $list,
			'title' => '角色'
		] );
	}
	
	/**
	 * 文章编辑
	 */
	public function modify ( Request $request, $id = 0 )
	{
		if ( $id )
			$data = $this->ManagerRole->getOne( [ [ 'id', $id ] ] );
		else
			$data = [];
		
		return view( 'manager_role.modify', [ 'title' => '角色', 'data' => $data ] );
	}
	
	public function modifyPost ( ManagerRoleRequest $request )
	{
		$data = $request->all();
		$re   = $this->ManagerRole->saveOne( $data );
		if ( !$re ) return back();
		
		return response()->redirectTo( url( 'admin/managerRole' ) );
	}
	
	public function remove ( Request $request, $id )
	{
		$re = $this->ManagerRole->deleteOne( $id );
		if ( !$id ) return back();
		
		return redirect()->route( 'managerRole' );
	}
	
	public function permission ( Request $request, $id )
	{
		$data = $this->ManagerRole->getOne( [ [ 'id', $id ] ] );
		
		if ( !$data ) return back();
		
		$data = [
			'role_id'    => $id,
			'title'      => '权限管理',
			'authList'   => NavEnum::getNavArr(),
			'permission' => $data->auth_access ? explode( ',', $data->auth_access ) : [],
		];
		return view( 'manager_role.permission', $data );
	}
	
	public function permissionPost ( Request $request )
	{
		$id = $request->get( 'id', 0 );
		if ( !$id ) return back();
		
		$permissionArr = $request->get( 'selected', '' );
		$permission    = '';
		if ( $permissionArr ) $permission = implode( ',', $permissionArr );
		
		$re = $this->ManagerRole->saveOne( [ 'id' => $id, 'auth_access' => $permission ] );
		if( !$re ) return back();
		
		return redirect()->route('managerRole');
	}
}
