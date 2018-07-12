@extends('public.base')
@section('title', '权限管理')
@section('header')
	@php
		$group = 'Manager';
		$secondNav = 'admin/managerRole';
	@endphp
	<style>
		.group-title {
			margin: 15px 0;
		}
		
		.group-content {
			border-top: 1px solid #eee;
			padding: 8px 15px;
			background: #f7f7f7;
		}
		
		.group-content label {
			display: inline-block;
			min-width: 80px;
			font-weight: normal;
			margin-right: 15px;
		}
		
		.child-wrap {
			border-bottom: 1px solid #eee;
			overflow: hidden;
			padding: 5px 0;
		}
		
		.child-title {
			float: left;
			width: 200px;
		}
		
		.child-content {
			overflow: hidden;
		}
	</style>
@endsection
@section("content")
	<main id="main-container">
		<div class="content bg-gray-lighter">
			<div class="row items-push">
				<div class="col-sm-7">
					<h1 class="page-heading">
						{{$title}}
					</h1>
				</div>
				<div class="col-sm-5 text-right hidden-xs">
					<ol class="breadcrumb push-10-t">
						<li>管理中心</li>
						<li><a class="link-effect" href="{{url('admin/managerRole')}}">角色权限</a></li>
					</ol>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="block">
				<div class="block-content">
					<form name="permission-form" class="js-validation-bootstrap form-horizontal"
						  action="{{url('admin/managerRole/permissionPost')}}" method="post"
						  onsbumit="return checkInput();">
						<div class="form-group form-inline" style="padding:0 20px;">
							@foreach($authList as $groupkey=>$group)
								<div class="group-wrap">
									<div class="group-title">
										<label class="css-input css-checkbox css-checkbox-primary"><input
													type="checkbox" name="selected[]" value="{{$groupkey}}"
													{{in_array($groupkey, $permission)?'checked':''}} /><span></span>
											<strong>{{$group[0]}}</strong></label>
									</div>
									<div class="group-content">
										@foreach($group[3] as $controllerkey=>$controller)
											<div class="child-wrap">
												<div class="child-title">
													<label class="css-input css-checkbox css-checkbox-primary"><input
																type="checkbox" name="selected[]"
																value="{{$controllerkey}}" {{in_array($controllerkey,
																$permission)?'checked':''}}/><span></span>
														{{$controller[0]}}</label>
												</div>
												
												<div class="child-content">
													@foreach($controller[3] as $actionkey=>$action)
														<label class="css-input css-checkbox css-checkbox-sm css-checkbox-primary"
															   style="width:200px;"><input type="checkbox"
																						   name="selected[]"
																						   data-show="{{$action[2]?'1':'0'}}"
																						   value="{{$actionkey}}"
																						   {{in_array($actionkey,
																						   $permission)?'checked':''}}
															/><span></span> {{$action[0]}}</label> &nbsp; &nbsp;
													@endforeach
												</div>
											</div>
										@endforeach
									</div>
								</div>
							@endforeach
						</div>
						<div class="form-group">
							<div class="">
								{{csrf_field()}}
								<input type="hidden" name="id" value="{{$role_id}}"/>
								<button type="submit" class="btn btn-primary">完成提交</button>
								<a class="btn btn-default" href="javascript:history.back(-1)">返回列表</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
@endsection

@section("footer_js")
	<script src="/mg/js/core/bootstrap.min.js"></script>
	<script src="/mg/js/core/jquery.slimscroll.min.js"></script>
	<script src="/mg/js/core/jquery.scrollLock.min.js"></script>
	<script>
        function checkInput() {
            $('.group-wrap').each(function () {
                var $group = $(this);

                $group.find('.child-content').each(function () {
                    var valueArr = [],
                        $this = $(this),
                        $inputs = $this.find('input[data-show="1"]');

                    $inputs.each(function () {
                        if (this.checked) {
                            valueArr.push(this.value);
                        }
                    });

                    if ($inputs.length > 0) {
                        $this.prev().find('input').get(0).checked = valueArr.length > 0 ? true : false;
                    }
                });

                var controllerSelectedArr = [];
                var $controllerInputs = $group.find('.child-title input');
                $controllerInputs.each(function () {
                    if (this.checked) {
                        controllerSelectedArr.push(this.value);
                    }
                });
                $controllerInputs.parents('.group-content').prev().find('input').get(0).checked = controllerSelectedArr.length > 0 ? true : false;
            });
        }

        $(function () {
            App.initHelpers('table-tools');

            $('.group-title input').change(function () {
                var checked = this.checked;
                $(this).parents('.group-title').next().find('input').each(function () {
                    this.checked = checked;
                });

                checkInput();
            });
            $('.child-title input').change(function () {
                var checked = this.checked;
                $(this).parents('.child-title').next().find('input').each(function () {
                    this.checked = checked;
                });

                checkInput();
            });
            $('.child-content input').change(function () {
                checkInput();
            });


            /*$('form[name="permission-form"]').submit(function(){
				checkInput();
				$('form[name="permission-form"]').submit();
				/*
				var valueArr = [],
					$inputs = $('.child-content input');
				
				$inputs.each(function(){
					if( this.checked ){
						valueArr.push( this.value );
					}
				});
				
				if( $inputs.length == valueArr.length ){
					//all selected
					
				}else{
				
				}
				$('input[name="permissions"]').val( valueArr.length>0 ? ','+valueArr.join(',')+',' : '' );
				return false;
			});*/
            checkInput
        });
	</script>
@endsection