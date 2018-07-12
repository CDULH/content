@extends('public.base')
@section('title', $title)
@section('header')
	@php
		$group = 'manager';
		$secondNav = 'admin/manager';
	@endphp
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
						<li><a class="link-effect" href="">{{$title}}</a></li>
					</ol>
				</div>
			</div>
		</div>
		@include('errors.error_lay')
		<div class="content">
			<div class="block">
				<div class="block-content block-content-narrow">
					<form class="js-validation-bootstrap form-horizontal" id="modify_form"
						  action="{{url("admin/manager/modifyPost")}}" method="post" onsubmit="">
						<div class="form-group">
							<label class="col-md-2 control-label">角色<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<select class="form-control val-username" name="role_id">
									@foreach($roles as $role)
										<option value="{{$role->id}}" {{$data&&$data->role_id == $role->id?'selected':''}}>{{$role->role}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">账号<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<input class="form-control val-username" type="text" placeholder="不能为空" name="username"
									   value="{{$data->username or ''}}">
							</div>
						</div>
						@if(!$data)
							<div class="form-group">
								<label class="col-md-2 control-label">登陆密码<span class="text-danger">*</span></label>
								<div class="col-md-4">
									<input class="form-control val-username" type="password" placeholder="不能为空" name="password"
										   value="{{$data->password or ''}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">确认密码<span class="text-danger">*</span></label>
								<div class="col-md-4">
									<input class="form-control val-username" type="password" placeholder="不能为空"
										   name="password_confirmation"
										   value="">
								</div>
							</div>
						@endif
						<div class="form-group">
							<label class="col-md-2 control-label">昵称<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<input class="form-control val-username" type="text" placeholder="不能为空" name="nickname"
									   value="{{$data->nickname or ''}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">电话号码<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<input class="form-control val-username" type="text" placeholder="不能为空" name="phone"
									   value="{{$data->phone or ''}}">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-4 col-md-offset-2">
								{{csrf_field()}}
								<input type="hidden" name="id" value="{{$data->id or 0}}">
								<button class="btn btn-lg btn-primary" type="submit">&nbsp; 提交 &nbsp;</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
@endsection

@section("footer_js")
	<script>
	
	</script>
@endsection