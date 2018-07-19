@extends('public.base')
@section('title', 'banner')
@section('header')
	@php
		$group = 'Config';
		$secondNav = 'admin/banner';
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
						  action="{{url("admin/banner/modifyPost")}}" method="post" onsubmit="">
						<div class="form-group">
							<label class="col-md-2 control-label">适用范围<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<select class="form-control val-username" name="channel">
									@foreach($channels as $key=>$channel)
										<option value="{{$key}}" {{isset($data->channel)&&$key == $data->channel?'selected':''}}>{{$channel}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">标题<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<input class="form-control val-username" type="text" placeholder="不能为空" name="title"
									   value="{{$data->title or ''}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">排序<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<input class="form-control val-username" type="text" placeholder="不能为空" name="sort"
									   value="{{$data->sort or ''}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">图片<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<input class="form-control val-username" type="hidden" placeholder="不能为空" name="file_id"
									   value="{{$data->file_id or ''}}">
								
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
	<script>
	</script>
@endsection