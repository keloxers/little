@extends('layouts.default')
@section('content')

<!-- PAGE HEADER : begin -->
<div id="page-header">
	<div class="container">
		<h1>{{trans('app.title_site')}}</h1>
	</div>
</div>
<!-- PAGE HEADER : end -->

<!-- PARALLAX SECTION : begin -->
							<section class="c-parallax-section m-dynamic" style="" data-videobg-id="KJO88Qhxwv4">
								<div class="section-inner">

									<header class="section-header textalign-center">
										<div class="container">
											<h2>{{trans('pages.Wecreategames')}}</h2>
										</div>
									</header>

									<div class="container">
										<p class="textalign-center fontsize-medium max-width-800 margin-sides-auto">{{trans('pages.For2D3D')}}</p>
									</div>


								</div>
							</section>
							<!-- PARALLAX SECTION : end -->



<div class="container">
	<div class="row">
		<div class="col-md-8">







			<?php if (count($articulos)) { ?>
				<?php } ?>


			<!-- PAGE CONTENT : begin -->
											<div id="page-content">

												<!-- BLOG LIST : begin -->
												<div class="blog-list">



													@foreach ($articulos as $articulo)
													<?php
													$texto = $articulo->texto;
													$archivos = DB::table('archivos')
													->where('padre', '=', 'articulo')
													->where('padre_id', '=', $articulo->id)
													->first();

													if (preg_match('/^.{1,260}\b/s', $articulo->texto, $match))
													{ $texto = $match[0]; }
													$categoria = Categoria::find($articulo->categorias_id);
													?>




													<!-- IMAGE ARTICLE : begin -->
													<article class="image">
														<div class="article-inner">

															<!-- ARTICLE IMAGE : begin -->
															<div class="article-image">
																<a href="/articulos/show/{{ $articulo->url_seo }}"><img src="/uploads/big/{{ $archivos->archivo }}" alt=""></a>
															</div>
															<!-- ARTICLE IMAGE : end -->

															<!-- ARTICLE HEADER : begin -->
															<header class="article-header">
																<span class="article-date">{{ $articulo->created_at }}</span>
																<h2 class="article-title"><a href="/articulos/show/{{ $articulo->url_seo }}">{{ $articulo->articulo }}</a></h2>
															</header>
															<!-- ARTICLE HEADER : end -->

															<!-- ARTICLE CONTENT : begin -->
															<div class="article-content various-content">
																<p class="lead">{{ $articulo->copete }}.</p>
																<p>{{ $texto }}....</p>
															</div>
															<!-- ARTICLE CONTENT : end -->

															<!-- ARTICLE FOOTER : begin -->
															<footer class="article-footer">
																<ul class="article-info">
																	<li class="author">{{$articulo->users_id}}</li>
																	<!-- <li class="categories"><a href="#">Space</a>, <a href="#">Stars</a>, <a href="#">Travel</a></li> -->
																	<li class="categories">{{$articulo->visitas}}</li>
																	@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
																		<li class="author"><a href="/articulos/{{$articulo->id}}/edit">Editar</a></li>
																	@endif

																</ul>
																<p class="article-more"><a href="/articulos/show/{{ $articulo->url_seo }}" class="c-button m-outline">Leer más</a></p>
															</footer>
															<!-- ARTICLE FOOTER : end -->

														</div>
													</article>
													<!-- IMAGE ARTICLE : end -->

													@endforeach


												</div>
												<!-- BLOG LIST : end -->

												<!-- PAGINATION : begin -->
												<div class="c-pagination">
														{{ $articulos->links()}}
												</div>
												<!-- PAGINATION : end -->

											</div>
											<!-- PAGE CONTENT : end -->





													</div>
													<div class="col-md-4">

														<?php

															$categorias = DB::table('categorias')
																								->orderBy('categoria', 'desc')->get();

															$articulos_masvistos = DB::table('articulos')
																								->where('estado', '=', 'publicado')
																								->orderBy('visitas', 'desc')
																								->orderBy('created_at', 'desc')
																								->paginate(4);


														 ?>

														<!-- PAGE SIDEBAR : begin -->
														<aside id="page-sidebar">

															<!-- SIDEBAR SEARCH : begin -->
															<!-- <div class="widget search-widget">
																<h3 class="widget-title">Buscar</h3>
																<div class="widget-content">

																	<form class="c-search-form" action="search-results.html">
																		<div class="form-fields">
																			<input type="text" data-placeholder="buscar...">
																			<button class="c-button" type="submit"><i class="fa fa-search"></i></button>
																		</div>
																	</form>

																</div>
															</div> -->
															<!-- SIDEBAR SEARCH : end -->

															<!-- SIDEBAR LINKS : begin -->
															<div class="widget links-widget">
																<h3 class="widget-title">{{trans('pages.categories')}}</h3>
																<div class="widget-content">


																	<ul>

																		<?php if (count($categorias)) { ?>



																			@foreach ($categorias as $categoria)
																				<li><a href="/categorias/{{$categoria->id}}">{{$categoria->categoria}}</a></li>
																			@endforeach

																			<?php } ?>

																	</ul>

																</div>
															</div>
															<!-- SIDEBAR LINKS : end -->

															<!-- BLOG WIDGET : begin -->
															<div class="widget blog-widget">
																<h3 class="widget-title">{{trans('pages.lastpost')}}</h3>
																<div class="widget-content">


																	<ul>

																		<?php if (count($articulos_masvistos)) { ?>

																			@foreach ($articulos_masvistos as $articulos_masvisto)
																		<li>
																			<h4><a href="/articulos/show/{{ $articulos_masvisto->url_seo }}">{{ $articulos_masvisto->articulo }}</a></h4>
																			<p class="date">{{ $articulos_masvisto->created_at }}</p>
																		</li>
																			@endforeach

																		<?php } ?>


																	</ul>

																</div>
															</div>
															<!-- BLOG WIDGET : end -->


														</aside>
														<!-- PAGE SIDEBAR : end -->

													</div>
												</div>
											</div>




@stop
