@extends('layouts.default')

@section('content')

<div class="container">

						<!-- PAGE CONTENT : begin -->
						<div id="page-content">
							<div class="various-content">



<!-- TABLE SECTION : begin -->
								<section>
									<br><br>
									<h2>Articulos</h2>
									<a href='/articulos/create'>Crear nuevo</a><br>

									<!-- TABLE : begin -->
									<table class="m-alternate">
										<thead>
											<tr>
												<th>Lang</th>
												<th>Titular</th>
												<th>Accion</th>
											</tr>
										</thead>
										<tbody>
											@if (count($articulos)>0 )
												@foreach ($articulos as $articulo)
														<tr>
															<td>{{ $articulo->lang }}</td>
															<td>{{ $articulo->articulo }}</td>
															<td>
																@if ($articulo->estado <> 'publicado')
																	<a href='/articulos/{{$articulo->id}}/publicar' class="c-button">Publicar</a>
																@endif
																<a href='/articulos/{{$articulo->id}}/archivos/articulo' class="c-button">Archivos</a>
																<a href='/articulos/{{$articulo->id}}/edit' class="c-button">Editar</a>
																<a href='/articulos/{{$articulo->id}}/delete' class="c-button">Eliminar</a>



															</td>
														</tr>
												@endforeach
											@endif
										</tbody>
									</table>
									<!-- TABLE : end -->

								</section>
								<!-- TABLE SECTION : end -->

							</div>
							</div>
							</div>



@stop
