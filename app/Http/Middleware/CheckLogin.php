<?php

namespace App\Http\Middleware;

use App\Enum\NavEnum;
use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    	//检查登陆
		$name = $request->path();
    	if( $name != 'admin/login/login' && $name != 'admin/logout' ){
			$manager = adminSessionGet('managerData');
			if( !$manager ){
				return redirect()->route("login");
			}
		
			if( $name != 'admin' ){
				//检查权限
				if( !$manager['supper_master'] ){
					$auth_access = explode(',', $manager['auth_access']);
					
					$navTree = NavEnum::getNavArr();
					if( !$this->check_auth($navTree, $name, $auth_access) ){
						if( $request->ajax() )
							return response()->json(['code'=>100, 'msg'=>'抱歉，您没有权限！！！']);
						else
							return response()->view('errors.deny');
					}
				}
			}
			
		}
        return $next($request);
    }
    
    protected function check_auth($navTree, $name, $auth_access){
    	
    	$auth = adminSessionGet('auth');
    	$arr = $auth?$auth:[];
		if( !$arr ){
			foreach( $navTree as $groupKey=>$group ){
				foreach( $group[3] as $controllerKey=>$controller ){
					if( is_array($controller[3]) ){
						foreach ( $controller[3] as $actionKey=>$action ){
							if( in_array($actionKey, $auth_access) ){
								$arr[] = $action[1];
							}
						}
					}
				}
			}
			adminSessionPut('auth', $arr);
		}
		if($arr && in_array($name, $arr)){
			return true;
		}
		return false;
	}
}
