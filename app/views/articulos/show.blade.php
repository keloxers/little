@extends('layouts.default')
@section('content')

<!-- PAGE HEADER : begin -->
<div id="page-header">
	<div class="container">
		<h1>{{$articulo->articulo}}</h1>
	</div>
</div>
<!-- PAGE HEADER : end -->



<div class="container">
	<div class="row">
		<div class="col-md-8">



			<!-- PAGE CONTENT : begin -->
								<div id="page-content">

									<!-- BLOG DETAIL : begin -->
									<div class="blog-detail">

										<!-- IMAGE ARTICLE : begin -->
										<article class="image">


											<?php foreach ($archivos as $archivo) { ?>

												<!-- ARTICLE IMAGE : begin -->
												<div class="article-image">
													<img src="/uploads/big/{{ $archivo->archivo }}" alt="">
												</div>
												<!-- ARTICLE IMAGE : end -->


												<?php } ?>


											<!-- ARTICLE CONTENT : begin -->
											<div class="article-content various-content">
												<p class="lead">{{$articulo->copete}}.</p>
												<p>{{$articulo->texto}}</p>
											</div>
											<!-- ARTICLE CONTENT : end -->

											<!-- ARTICLE FOOTER : begin -->
											<footer class="article-footer">
												<ul class="article-info">
													<li class="date">{{$articulo->created_at}}</li>
													<li class="author">{{$articulo->users_id}}</li>
													<li class="categories"><a href="#">{{$articulo->categoriass_id}}</a></li>
												</ul>
											</footer>
											<!-- ARTICLE FOOTER : end -->

										</article>
										<!-- IMAGE ARTICLE : end -->

										</div>
										<!-- ARTICLE RELATED : end -->



									</div>
									<!-- BLOG DETAIL : end -->

								</div>
								<!-- PAGE CONTENT : end -->





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
																<h3 class="widget-title">Categorias</h3>
																<div class="widget-content">


																	<ul>

																		<?php if (count($categorias)) { ?>



																			@foreach ($categorias as $categoria)
																				<li><a href="#">{{$categoria->categoria}}</a></li>
																			@endforeach

																			<?php } ?>

																	</ul>

																</div>
															</div>
															<!-- SIDEBAR LINKS : end -->

															<!-- BLOG WIDGET : begin -->
															<div class="widget blog-widget">
																<h3 class="widget-title">Ultimos Posts</h3>
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
