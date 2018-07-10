@extends('public.base')

@section("content")
	<main id="main-container">
		<div class="content bg-gray-lighter">
			<div class="row items-push">
				<div class="col-sm-7">
					<h1 class="page-heading">
					</h1>
				</div>
				<div class="col-sm-5 text-right hidden-xs">
					<ol class="breadcrumb push-10-t">
						<li>管理中心</li>
						<li><a class="link-effect" href="">文章</a></li>
					</ol>
				</div>
			</div>
		</div>
		
		<div class="content">
			<div class="block">
				<div class="block-content">
					<div class="push-30 form-inline">
						<a class="btn btn-sm btn-default" data-toggle="tooltip"
						   href="">编辑{{$title}}</a>
						<span style="display:inline-block; width:20px; text-align:center; color:#ddd;">|</span>
						<select class="form-control input-sm"
								onchange="location.href='{$url}?machine_state='+this.value">
							<option value="">-------状态------</option>
							<option value="">未定</option>
						</select>
					</div>
					<div class="table-responsive content-list" data-baseurl="">
						<table class="table table-striped table-vcenter">
							<thead>
							<tr>
								<th class="text-center" style="width: 120px;"><i class="si si-user"></i></th>
								<th style="width:200px;">标题</th>
								<th style="width:200px;">作者</th>
								<th style="width:200px;">类型</th>
								<th style="width:200px;">创建时间</th>
								<th class="text-center" style="width: 200px;">操作</th>
							</tr>
							</thead>
							<tbody>
							@forelse($list as $item)
								<tr class="item-row-{$item.id}">
									<td>{{$item->id}}</td>
									<td>{{$item->title}}</td>
									<td>{{$item->author}}</td>
									<td>{{$item->type->type}}</td>
									<td>{{$item->created_at}}</td>
									<td class="text-center">
										<a class="btn btn-sm btn-default"
										   href="{{url('admin/content/modify', [$item->id])}}">编辑</a>
										<a class="btn btn-sm btn-default del" href='javascript:;'
										   data-url="{{url('admin/content/remove', ['id',$item->id])}}"
										   title="删除">删除</a>
									</td>
								</tr>
							@empty
								<tr class="item-row-{$item.id}">
									<td class="text-center">没有用户</td>
								</tr>
							@endforelse
							</tbody>
						</table>
					</div>
					<div class="pagination-c">{{$list->links()}}</div>
				</div>
			</div>
		</div>
	</main>
@endsection

@section("footer_js")

@endsection