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
	
	<!-- Stylesheets -->
	<!-- Web fonts -->
	<!-- <link rel="stylesheet" href="http://fonts.useso.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"> -->
	
	<!-- Page JS Plugins CSS -->
	<link rel="stylesheet" href="/mg/js/plugins/slick/slick.min.css">
	<link rel="stylesheet" href="/mg/js/plugins/slick/slick-theme.min.css">
	<link href="/mg/js/plugins/bootstrap-dialog/bootstrap-dialog-1.34.7.min.css" rel="stylesheet">
	
	<!-- OneUI CSS framework -->
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

<script src="/mg/js/jquery-2.2.3.min.js"></script>
<script src="/mg/js/ajaxfileupload.js"></script>
<script src="/mg/js/core/bootstrap.min.js"></script>
<script src="/mg/js/core/jquery.slimscroll.min.js"></script>
<script src="/mg/js/core/jquery.scrollLock.min.js"></script>
<script src="/mg/js/core/jquery.appear.min.js"></script>
<script src="/mg/js/core/jquery.countTo.min.js"></script>
<script src="/mg/js/core/jquery.placeholder.min.js"></script>
<script src="/mg/js/core/jquery.sortable.js"></script>
<script src="/mg/js/core/js.cookie.min.js"></script>
<script src="/mg/js/plugins/bootstrap-dialog/bootstrap-dialog-1.34.7.min.js"></script>
<script src="/mg/js/app.js"></script>
<script src="/mg/js/script.js"></script>
<script src="/mg/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="/mg/js/pages/base_ui_activity.js"></script>
<script src="/mg/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="/mg/js/pages/base_forms_validation.js"></script>

@section("footer_js")

@show
<script>
    $(function () {
        App.initHelpers('notify');
    });
</script>
</body>
</html>