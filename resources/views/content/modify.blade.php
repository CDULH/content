
@extends('public.base')

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
						<li><a class="link-effect" href="">商品</a></li>
					</ol>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="block">
				<div class="block-content block-content-narrow">
					<form class="js-validation-bootstrap form-horizontal" id="modify_form" action="{{url("admin/content/modifyPost")}}" method="post" onsubmit="return false;">
						<div class="form-group">
							<label class="col-md-2 control-label">类型<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<select class="form-control val-username" name="type_id">
									<option value="{$vo['id']}" ></option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">标题<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<input class="form-control val-username" type="text" name="title"  placeholder="不能为空" value="{{$data->title}}" >
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-md-2 control-label">作者<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<input class="form-control val-username" type="text" placeholder="不能为空" name="author" value="{{$data->author or 'ss'}}" >
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">状态<span class="text-danger">*</span></label>
							<div class="col-md-4">
								<select class="form-control val-username" name="status">
									<option >---商品状态---</option>
									<option value="0" >OTHER</option>
									<option value="1" >OPEN</option>
									<option value="2" >CLOSE</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-2 control-label">详细内容<span class="text-danger">*</span></label>
							<div class="col-md-10">
								<textarea class="form-control js-summernote" type="text" name="content">{{$data->content}}</textarea>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-4 col-md-offset-2">
								<input type="hidden" name="id" value="{{$data->id}}">
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