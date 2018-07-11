<nav id="sidebar">
	<div id="sidebar-scroll">
		<div class="sidebar-content">
			<div class="side-header side-content bg-white-op">
				<button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout"
						data-action="sidebar_close">
					<i class="fa fa-times"></i>
				</button>
				<div class="btn-group pull-right">
					<button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
						<i class="si si-drop"></i>
					</button>
					<ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
						<li>
							<a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
								<i class="fa fa-circle text-default pull-right"></i> <span
										class="font-w600">Default</span>
							</a>
						</li>
						<li>
							<a data-toggle="theme" data-theme="/mg/css/themes/amethyst.min.css" tabindex="-1"
							   href="javascript:void(0)">
								<i class="fa fa-circle text-amethyst pull-right"></i> <span
										class="font-w600">Amethyst</span>
							</a>
						</li>
						<li>
							<a data-toggle="theme" data-theme="/mg/css/themes/city.min.css" tabindex="-1"
							   href="javascript:void(0)">
								<i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
							</a>
						</li>
						<li>
							<a data-toggle="theme" data-theme="/mg/css/themes/flat.min.css" tabindex="-1"
							   href="javascript:void(0)">
								<i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
							</a>
						</li>
						<li>
							<a data-toggle="theme" data-theme="/mg/css/themes/modern.min.css" tabindex="-1"
							   href="javascript:void(0)">
								<i class="fa fa-circle text-modern pull-right"></i> <span
										class="font-w600">Modern</span>
							</a>
						</li>
						<li>
							<a data-toggle="theme" data-theme="/mg/css/themes/smooth.min.css" tabindex="-1"
							   href="javascript:void(0)">
								<i class="fa fa-circle text-smooth pull-right"></i> <span
										class="font-w600">Smooth</span>
							</a>
						</li>
					</ul>
				</div>
				<a class="h5 text-white" href="index.html">
					<i class="fa fa-circle-o-notch text-primary"></i> <span
							class="h4 font-w600 sidebar-mini-hide">MINE</span>
				</a>
			</div>
			<div class="side-content">
				<ul class="nav-main">
					<li>
						<a class="" href="{{url('admin')}}"><i class="si si-speedometer"></i><span
									class="sidebar-mini-hide">系统总览</span></a>
					</li>
					@php
						$nav = \App\Enum\NavEnum::getNavArr();
					@endphp
					@foreach($nav as $item)
						<li class="{{$item[1]==$group?'open':''}}">
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class=""></i><span
										class="sidebar-mini-hide">{{$item[0]}}</span></a>
							@foreach($item[3] as $item2)
								<ul>
									<li>
										<a class=" {{$item2[1]==$secondNav?'active':''}}" href="{{url($item2[1])}}">{{$item2[0]}}</a>
									</li>
								</ul>
							@endforeach
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</nav>