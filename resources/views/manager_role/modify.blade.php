@extends('public.base')
@section('title', '文章')
@section('header')
	@php
		$group = 'Manager';
		$secondNav = 'admin/managerRole';
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
						  action="{{url("admin/managerRole/modifyPost")}}" method="post" onsubmit="">
						
						<div class="form-group">
							<label class="col-md-2 control-label">角色<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<input class="form-control val-username" type="text" placeholder="不能为空" name="role"
									   value="{{$data->role or ''}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">描述<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<input class="form-control val-username" type="text" placeholder="不能为空" name="description"
									   value="{{$data->description or ''}}">
							</div>
						</div>
						{{csrf_field()}}
						<div class="form-group">
							<div class="col-md-4 col-md-offset-2">
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
@endsection