<!DOCTYPE html>
<html>
	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{trans('app.site')}}</title>
        <link rel="shortcut icon" href="/images/favicon.ico">

		<!-- GOOGLE FONTS : begin -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700%7cMontserrat:400,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
		<!-- GOOGLE FONTS : end -->

        <!-- STYLESHEETS : begin -->
		<link rel="stylesheet" type="text/css" href="/library/css/style.css">
        <link rel="stylesheet" type="text/css" href="/library/css/skin/default.css">
		<link rel="stylesheet" type="text/css" href="/library/css/custom.css">
		<!-- STYLESHEETS : end -->

        <!--[if lte IE 8]>
			<link rel="stylesheet" type="text/css" href="/library/css/oldie.css">
			<script src="/library/js/respond.min.js" type="text/javascript"></script>
        <![endif]-->
		<script src="/library/js/modernizr.custom.min.js" type="text/javascript"></script>

	</head>
	<body>

		<!-- HEADER : begin -->
		<header id="header" class="m-standard m-enable-fixed m-fixed-bg">
			<div class="header-inner">
				<div class="container">

					<!-- HEADER CONTENT : begin -->
					<div class="header-content">

						<!-- HEADER BRANDING : begin -->
						<div class="header-branding">
							<div class="header-branding-inner">
								<a href="/"><img src="/images/logo.png" width="100" height="100" alt="Vibes"
									data-hires="/images/logo.2x.png" data-fixed="/images/logo.png" data-fixed-hires="/images/logo.2x.png"
									data-fixed-width="52" data-fixed-height="52"></a>
							</div>
						</div>
						<!-- HEADER BRANDING : end -->

						<!-- HEADER MENU : begin -->
						<nav class="header-menu">
							<ul>
								<li><a href="/">Home</a></li>



								<?php
								$pagestops = DB::table('pages')
																	->where('activo', '=', 'si')
																	->where('lang', '=', Lang::locale())
																	->where('padre', '=', '')
																	->where('mostrar_menu', '=', 'si')
																	->orderBy('page', 'asc')->get();


								if (count($pagestops)) {

									foreach ($pagestops as $pagestop) {

								?>




								<li><a href="#">{{$pagestop->page}}</a>
									<ul>
										<?php
												$pages = DB::table('pages')
																					->where('activo', '=', 'si')
																					->where('lang', '=', Lang::locale())
																					->where('padre', '=', $pagestop->page)
																					->where('mostrar_menu', '=', 'si')
																					->orderBy('page', 'asc')->get();
												if (count($pages)) {
													foreach ($pages as $page) {
														?>
															<li><a href="/pages/{{$page->url_seo}}">{{$page->page}}</a></li>
														<?php
													}
												}
										?>
									</ul>
								</li>
								<?php
										}
									}
								?>




								@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))

								<li><a href="#">{{ Lang::get('messages.menu_admin') }}</a>
									<ul>
										<li><a href="{{ URL::to('/users') }}">{{trans('pages.users')}}</a></li>
										<li><a href="{{ URL::to('/groups') }}">{{trans('pages.groups')}}</a></li>
										<li><a href="/articulos/ver">Articulos</a></li>

										<li><a href="/contactos">Contactos</a></li>
								    <li><a href="/pages">Paginas</a></li>
									</ul>

								</li>


								@endif

								@if (Lang::locale()=='en')
									<li><a href="/es">Español</a></li>
								@else
									<li><a href="/en">English</a></li>
								@endif





														@if (Sentry::check())
														<li {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }}><a href="{{ URL::to('users') }}/{{ Session::get('userId') }}"><i class="icon-user"></i></a></li>
														<li><a href="{{ URL::to('logout') }}">{{trans('pages.logout')}}</a></li>
														@else
														<li {{ (Request::is('login') ? 'class="active"' : '') }}><a href="{{ URL::to('login') }}">{{trans('pages.login')}}</a></li>
														@endif



							</ul>
						</nav>
						<!-- HEADER MENU : end -->

					</div>
					<!-- HEADER CONTENT : end -->

					<!-- MAIN SIDEBAR TOGGLE : begin -->
					<button class="main-sidebar-toggle" type="button"><i class="fa fa-bars"></i></button>
					<!-- MAIN SIDEBAR TOGGLE : end -->

				</div>
			</div>
		</header>
		<!-- HEADER : end -->

		<!-- BODY : begin -->
		<div id="body">

			<!-- WRAPPER : begin -->
			<div id="wrapper">

				<!-- CORE : begin -->
				<div id="core" class="m-has-sidebar">


					@yield('content')


				</div>
				<!-- CORE : end -->

				<!-- BOTTOM PANEL : begin -->
				<div id="bottom-panel">

					<div class="container">
						<div class="row">
							<div class="col-md-4">

								<!-- TEXT WIDGET : begin -->
								<div class="widget text-widget">
									<h3 class="widget-title">About</h3>
									<div class="widget-content">

										<div class="various-content">
											<strong>Gdor. Virasoro</strong> Corrientes, Ar<br>
											<a href=""><strong>hello@littlegreatstudio.com</strong></a><br>
											<a href=""><strong>Skype</strong></a> littlegreatstudio<br>
											<strong>Movil</strong> +54 3756 610566</p>
										</div>

									</div>
								</div>
								<!-- TEXT WIDGET : end -->

							</div>
							<div class="col-md-4">



							</div>
							<div class="col-md-4">


							</div>
						</div>
					</div>

					<!-- BACK TO TOP : begin -->
					<a href="#header" id="back-to-top" title="Back to top"><i class="fa fa-chevron-up"></i></a>
					<!-- BACK TO TOP : end -->

				</div>
				<!-- BOTTOM PANEL : end -->

			</div>
			<!-- WRAPPER : end -->

			<!-- FOOTER : begin -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-push-6">

							<!-- FOOTER MENU : begin -->
							<nav class="footer-menu">
								<ul>
									<li><a href="/">Home</a></li>
								</ul>
							</nav>
							<!-- FOOTER MENU : end -->

						</div>
						<div class="col-md-6 col-md-pull-6">

							<!-- FOOTER TEXT : begin -->
							<div class="footer-text">
								<p><a href="mailto:hello@littlegreatstudio.com">LitteGreatStudio.com</a></p>
							</div>
							<!-- FOOTER TEXT : end -->

						</div>
					</div>
				</div>
			</div>
			<!-- FOOTER : end -->

		</div>
		<!-- BODY : end -->

		<!-- MAIN SIDEBAR : begin -->
		<div id="main-sidebar">
			<div class="main-sidebar-inner">

				<!-- SIDEBAR CLOSE : begin -->
				<button class="sidebar-close" type="button"><i class="fa fa-times"></i></button>
				<!-- SIDEBAR CLOSE : end -->

				<!-- SIDEBAR SEARCH : begin -->
				<form class="sidebar-search" action="index.html">
					<input type="text" data-placeholder="Search for...">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
				<!-- SIDEBAR SEARCH : end -->

				<!-- SIDEBAR MENU : begin -->
				<nav class="sidebar-menu m-header-menu-copy">
					<hr class="sidebar-divider">
				</nav>
				<!-- SIDEBAR MENU : end -->

				<!-- SIDEBAR SOCIAL : begin -->
				<ul class="sidebar-social">
					<li><a href="{{trans('app.seguinos_twitter')}}"><i class="fa fa-twitter"></i></a></li>
					<li><a href="{{trans('app.seguinos_facebook')}}"><i class="fa fa-facebook"></i></a></li>
					<li><a href="{{trans('app.seguinos_instagram')}}"><i class="fa fa-instagram"></i></a></li>
					<li><a href="{{trans('app.seguinos_twitter')}}"><i class="fa fa-youtube"></i></a></li>
				</ul>
				<!-- SIDEBAR SOCIAL : end -->

				<hr class="sidebar-divider">

				<!-- SIDEBAR WIDGETS : begin -->
				<div class="sidebar-widgets">

					<a class="twitter-timeline" href="https://twitter.com/LittleGreatAr">Tweets by LittleGreatAr</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>


				</div>
				<!-- SIDEBAR WIDGETS : end -->

			</div>
		</div>
		<!-- MAIN SIDEBAR : end -->

		<!-- SCRIPTS : begin -->
		<script src="/library/js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="/library/js/third-party.js" type="text/javascript"></script>
		<script src="/library/js/library.js" type="text/javascript"></script>
		<script src="/library/js/scripts.js" type="text/javascript"></script>
		<!-- SCRIPTS : end -->

	</body>
</html>
