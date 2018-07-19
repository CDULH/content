<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>@yield("title")</title>
	<meta name="description" content="OneUI - Admin Dashboard Template & UI Framework">
	<meta name="author" content="pixelcave">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
	
	<link rel="shortcut icon" href="/mg/img/favicons/favicon.png">
	
	<link rel="icon" type="image/png" href="/mg/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/mg/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/mg/img/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/mg/img/favicons/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="/mg/img/favicons/favicon-192x192.png" sizes="192x192">
	
	<link rel="apple-touch-icon" sizes="57x57" href="/mg/img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/mg/img/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/mg/img/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/mg/img/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/mg/img/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/mg/img/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/mg/img/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/mg/img/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/mg/img/favicons/apple-touch-icon-180x180.png">

@section('header')
@show

<!-- Stylesheets -->
	<!-- Web fonts -->
	<!-- <link rel="stylesheet" href="http://fonts.useso.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"> -->
	
	<!-- Page JS Plugins CSS -->
	
	<!-- Page JS Plugins CSS -->
	<link rel="stylesheet" href="/mg/js/plugins/sweetalert2/sweetalert2.min.css">
	
	<link rel="stylesheet" href="/mg/js/plugins/select2/select2.min.css">
	<link rel="stylesheet" href="/mg/js/plugins/select2/select2-bootstrap.min.css">
	
	<link rel="stylesheet" href="/mg/js/plugins/summernote/summernote.min.css">
	<link rel="stylesheet" href="/mg/js/plugins/simplemde/simplemde.min.css">
	
	<!-- Bootstrap and OneUI CSS framework -->
	<link rel="stylesheet" href="/mg/css/bootstrap.min.css">
	<link rel="stylesheet" id="css-main" href="/mg/css/oneui.css">
	<style type="text/css">
		h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, body, .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th {
			font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, Microsoft Yahei, sans-serif;
		}
		
		.pagination-c {
			margin: 20px 0;
		}
		
		.pagination-c a, .pagination-c span {
			display: inline-block;
			margin: 0 0 5px 5px;
			padding: 8px 12px;
			border: 1px solid #ddd;
		}
		
		.pagination-c .current {
			border-color: #70b9eb;
			background: #70b9eb;
			color: #fff;
		}
		
		.modal-backdrop.in {
			opacity: .5;
		}
		
		.modal-dialog .modal-content {
			border: 1px solid rgba(0, 0, 0, 0.2);
			border-radius: 6px;
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
			box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
		}
	</style>
	
	<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
	<!-- <link rel="stylesheet" id="css-theme" href="/mg/css/themes/flat.min.css"> -->
	<!-- END Stylesheets -->
</head>
<body>
<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
	@include("public.sidebar")
	@include("public.navbar")
	@include("public.header")
	@include("public.sidebar")
	
	@section("content")
	
	@show
	
	<footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
		<div class="pull-right">
			Created with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href=""
																	 target="_blank">Missheart</a>
		</div>
		<div class="pull-left">
			<a class="font-w600" href="javascript:void(0)" target="_blank">李航</a> &copy; <span
					class="js-year-copy"></span>
		</div>
	</footer>
</div>
<div id="page-loader" style="opacity: 0.5"></div>
<script src="/mg/js/core/jquery.min.js"></script>
<script src="/mg/js/core/bootstrap.min.js"></script>
<script src="/mg/js/core/jquery.slimscroll.min.js"></script>
<script src="/mg/js/core/jquery.scrollLock.min.js"></script>
<script src="/mg/js/core/jquery.appear.min.js"></script>
<script src="/mg/js/core/jquery.countTo.min.js"></script>
<script src="/mg/js/core/jquery.placeholder.min.js"></script>
<script src="/mg/js/core/js.cookie.min.js"></script>
<script src="/mg/js/app.js"></script>

<!-- Page Plugins -->

<!-- Page JS Code -->
<script src="/mg/js/script.js"></script>
<script src="/mg/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="/mg/js/plugins/sweetalert2/es6-promise.auto.min.js"></script>
<script src="/mg/js/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="/mg/js/pages/base_ui_activity.js"></script>
<script src="/mg/js/plugins/select2/select2.full.min.js"></script>
<script src="/mg/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="/mg/js/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="/mg/js/plugins/summernote/summernote.min.js"></script>
<script src="/mg/js/plugins/ckeditor/ckeditor.js"></script>
<script src="/mg/js/plugins/simplemde/simplemde.min.js"></script>
@section("footer_js")

@show
<script>
    $(function () {
        App.initHelpers(['notify', 'summernote', 'ckeditor', 'simplemde']);
    });
</script>
</body>
</html>