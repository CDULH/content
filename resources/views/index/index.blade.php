@extends('public.base')
@section('title', '文章管理系统');
@section("content")
	<main id="main-container">
		<!-- Page Header -->
		<div class="content bg-image overflow-hidden" style="background-image: url('/mg/img/photos/photo3@2x.jpg');">
			<div class="push-50-t push-15">
				<h1 class="h2 text-white animated zoomIn">系统总览</h1>
				<h2 class="h5 text-white-op animated zoomIn">{{date('Y年m月d日H点i分')}}</h2>
			</div>
		</div>
		<!-- END Page Header -->
		
		<!-- Stats -->
		<div class="content bg-white border-b">
			<div class="row items-push text-uppercase">
				<div class="col-xs-6 col-sm-3">
					<div class="font-w700 text-gray-darker animated fadeIn">租金总额</div>
					<div class="text-muted animated fadeIn">
						<small><i class="si si-calendar"></i> 今天</small>
					</div>
					<a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">&yen;
						</a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="font-w700 text-gray-darker animated fadeIn">资产总额</div>
					<div class="text-muted animated fadeIn">
						<small><i class="si si-calendar"></i> 今天</small>
					</div>
					<a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">&yen;
						</a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="font-w700 text-gray-darker animated fadeIn">总浏览量</div>
					<div class="text-muted animated fadeIn">
						<small><i class="si si-calendar"></i></small>
					</div>
					<a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">&yen; 11</a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="font-w700 text-gray-darker animated fadeIn">昨日浏览量</div>
					<div class="text-muted animated fadeIn">
						<small><i class="si si-calendar"></i></small>
					</div>
					<a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">&yen; 11</a>
				</div>
			</div>
		</div>
		<!-- END Stats -->
		
		<!-- Page Content -->
		<div class="content">
			<div class="row">
				<div class="col-lg-8">
					<!-- Main Dashboard Chart -->
					<div class="block">
						<div class="block-header">
							<ul class="block-options">
								<li>
									<button type="button" data-toggle="block-option" data-action="refresh_toggle"
											data-action-mode="demo"><i class="si si-refresh"></i></button>
								</li>
							</ul>
							<h3 class="block-title">-----
								<lable>-----<i
											style="background:rgba(44, 52, 63, .25)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
								</lable>&nbsp;&nbsp;
								<lable>-----<i
											style="background:rgba(44, 52, 63, .55)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
								</lable>
							</h3>
						</div>
						<div class="block-content block-content-full bg-gray-lighter text-center">
							<div style="height: 374px;">
								<canvas class="js-dash-chartjs-lines"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="block">
						<div class="block-header">
							<ul class="block-options">
								<li>
									-----:111
								</li>
							</ul>
							<h3 class="block-title">-----</h3>
						</div>
						<div class="block-content bg-gray-lighter">
							<div class="row items-push">
								<div class="col-xs-4">
									<div class="text-muted">
										<small><i class="si si-calendar"></i>-----(个)</small>
									</div>
									<div class="font-w600"><a href="">-----</a></div>
								</div>
								<div class="col-xs-4">
									<div class="text-muted">
										<small><i class="si si-calendar"></i>-----(元)</small>
									</div>
									<div class="font-w600"><a href="">-----</a></div>
								</div>
								<div class="col-xs-4 h1 font-w300 text-right"></div>
							</div>
						</div>
						<div class="block-content">
							<div class="pull-t pull-r-l">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection

@section("footer_js")
	<script src="/mg/js/plugins/slick/slick.min.js"></script>
	<script src="/mg/js/plugins/chartjs/Chart.min.js"></script>
	
	<!-- <script src="/mg/js/pages/base_pages_dashboard.js"></script> -->
	
	<script>
	
	</script>
@endsection