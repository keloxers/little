@extends('layouts.default')
@section('content')

<!-- PAGE HEADER : begin -->
<div id="page-header">
	<div class="container">
		<h1>Crear Articulo</h1>
	</div>
</div>
<!-- PAGE HEADER : end -->



<div class="container">
	<div class="row">
		<div class="col-md-8">





				<!-- FORM SECTION : begin -->
											<section>
												<div class="container">


													@if ($errors->first('articulo'))
																	<p class="c-alert-message m-warning m-validation-error"><i class="ico fa fa-exclamation-circle">
																	</i>{{ $errors->first('articulo') }}</p>
													@endif
													@if ($errors->first('copete'))
																	<p class="c-alert-message m-warning m-validation-error"><i class="ico fa fa-exclamation-circle">
																	</i>{{ $errors->first('copete') }}</p>
													@endif
													@if ($errors->first('articulo'))
																	<p class="c-alert-message m-warning m-validation-error"><i class="ico fa fa-exclamation-circle">
																	</i>{{ $errors->first('articulo') }}</p>
													@endif


													<!-- CONTACT FORM : begin -->

														{{ Form::open(array('route' => 'articulos.store', 'id' => 'contact-form', 'class' => 'default-form')) }}
														<input type="hidden" name="contact-form">

														<!-- FORM VALIDATION ERROR MESSAGE : begin -->
														<p class="c-alert-message m-warning m-validation-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>Please fill in all required (*) fields.</p>
														<!-- FORM VALIDATION ERROR MESSAGE : end -->

														<!-- SENDING REQUEST ERROR MESSAGE : begin -->
														<p class="c-alert-message m-warning m-request-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>There was a connection problem. Try again later.</p>
														<!-- SENDING REQUEST ERROR MESSAGE : end -->

														<div class="row">
															<div class="col-sm-4">

																<!-- NAME FIELD : begin -->
																<div class="form-field">
																	<label for="contact-name">Titular <span>*</span></label>
																	{{ Form::text('articulo', '', array('class' => 'm-required', 'id' => 'articulo', 'placeholder' => 'Ingrese el titular')) }}
																</div>
																<!-- NAME FIELD : end -->

																<!-- EMAIL FIELD : begin -->
																<div class="form-field">
																	<label for="contact-email">Lang <span>*</span></label>
																	{{ Form::select('lang', array('en' => 'en', 'es' => 'es'), 'en', array('id' =>'lang')) }}
																</div>
																<!-- EMAIL FIELD : end -->


																<!-- EMAIL FIELD : begin -->
																<div class="form-field">
																	<label for="contact-email">Tipo <span>*</span></label>
																	{{ Form::select('tipo', array('principal' => 'Principal', 'secundaria' => 'Secundaria'), 'principal', array('id' =>'tipo')) }}
																</div>
																<!-- EMAIL FIELD : end -->

																<!-- PHONE FIELD : begin -->
																<div class="form-field">
																	<label for="contact-phone">Categoria</label>
																	{{ Form::select( 'categorias_id', Categoria::All()->
																			lists('categoria', 'id'), Input::get('categoria'), array( "placeholder" => "")) }}

																</div>
																<!-- PHONE FIELD : end -->


															</div>
															<div class="col-sm-8">


																<!-- MESSAGE FIELD : begin -->
																<div class="form-field">
																	<label for="contact-message">Copete <span>*</span></label>
																	{{ Form::textarea('copete', '', array('id' => 'copete', 'rows' => '12','placeholder' => 'Copete')) }}
																</div>
																<!-- MESSAGE FIELD : end -->


																<!-- MESSAGE FIELD : begin -->
																<div class="form-field">
																	<label for="contact-message">Cuerpo <span>*</span></label>
																	{{ Form::textarea('texto', '', array('id' => 'texto', 'rows' => '12','placeholder' => 'Cuerpo')) }}
																</div>
																<!-- MESSAGE FIELD : end -->

																<!-- SUBMIT BUTTON : begin -->
																<div class="form-field">
																	<button type="submit" class="submit-btn c-button" type="submit">
																		<i class="icon-check pi-icon-left"></i>Guardar
																	</button>

																</div>
																<!-- SUBMIT BUTTON : end -->

															</div>
														</div>

													</form>
													<!-- CONTACT FORM : end -->

												</div>
											</section>
											<!-- FORM SECTION : end -->


										</div>
									</div>
								</div>




@stop




@stop
