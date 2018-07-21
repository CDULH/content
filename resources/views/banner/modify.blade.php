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
                                <button class="btn btn-primary push-5-r push-10" id="upload" type="button"
                                        data-url="{{url('admin/file/modifyPost')}}"><i class="fa fa-upload"></i>Upload
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><span class="text-danger"></span></label>
                            <div class="col-md-4">
                                <div class="col-lg-6 animated fadeIn" id="imgDiv"
                                     style="display: {{isset($data->file_id)?'block':'none'}}; padding: 0">
                                    <div class="img-container">
                                        <img id="uploadImgSrc"
                                             src="{{isset($data->file_id)?getImgurl($data->file_id):''}}" alt=""
                                             style="width: 80%; height: 80%;">
                                        <div class="img-options">
                                            <div class="img-options-content">
                                                <h4 class="h6 font-w400 text-white-op push-15">Some Extra Info</h4>
                                                <a class="btn btn-sm btn-default"
                                                   data-url="{{url("admin/file/remove")}}" id="deleteImage"
                                                   href="javascript:void(0)"><i class="fa fa-times"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    <form id="uploadForm" action="" style="display: none" enctype="multipart/form-data">
                        <input type="file" id="uploadInput" name="file">
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@section("footer_js")
    <script>
        uploadImage();
        $(function () {
            $("#deleteImage").click(function () {
                var url = $(this).data("url");
                var id = $("input[name=file_id]").val();
                swalLoad();
                $.ajax({
                    url: url,
                    type: 'post',
                    dataType: 'json',
                    data: {id: id},
                    error: function () {
                        swalLoadOver();
                    },
                    success: function (res) {
                        if (res.code == 0) {
                            window.location.reload();
                        } else {
                            swalNotify(res.msg ? res.msg : '删除失败', function () {
                            }, 'error');
                        }
                    }
                });
            });
        })

    </script>
@endsection