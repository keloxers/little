@extends('layouts.default')
@section('content')

<!-- PAGE HEADER : begin -->
<div id="page-header">
	<div class="container">
		<h1>{{trans('app.title_site')}}</h1>
	</div>
</div>
<!-- PAGE HEADER : end -->



<div class="container">
	<div class="row">
		<div class="col-md-8">





				<!-- FORM SECTION : begin -->
											<section>
												<div class="container">

													<h2>Crear página</h2>


													@if ($errors->first('page'))
																	<p class="c-alert-message m-warning m-validation-error"><i class="ico fa fa-exclamation-circle">
																	</i>{{ $errors->first('page') }}</p>
													@endif
													@if ($errors->first('activo'))
																	<p class="c-alert-message m-warning m-validation-error"><i class="ico fa fa-exclamation-circle">
																	</i>{{ $errors->first('activo') }}</p>
													@endif
													@if ($errors->first('mostrar_menu'))
																	<p class="c-alert-message m-warning m-validation-error"><i class="ico fa fa-exclamation-circle">
																	</i>{{ $errors->first('mostrar_menu') }}</p>
													@endif
													@if ($errors->first('padre'))
																	<p class="c-alert-message m-warning m-validation-error"><i class="ico fa fa-exclamation-circle">
																	</i>{{ $errors->first('padre') }}</p>
													@endif
													@if ($errors->first('html'))
																	<p class="c-alert-message m-warning m-validation-error"><i class="ico fa fa-exclamation-circle">
																	</i>{{ $errors->first('html') }}</p>
													@endif


													<!-- CONTACT FORM : begin -->
														{{ Form::open(array('route' => 'pages.store', 'id' => 'contact-form', 'class' => 'default-form')) }}
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
																	{{ Form::text('page', '', array('class' => 'm-required', 'id' => 'page', 'placeholder' => 'Ingrese el titular')) }}
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
																	<label for="contact-email">Activo <span>*</span></label>
																	{{ Form::select('activo', array('si' => 'Si', 'no' => 'No'), 'si', array('id' =>'activo')) }}
																</div>
																<!-- EMAIL FIELD : end -->

																<!-- PHONE FIELD : begin -->
																<div class="form-field">
																	<label for="contact-phone">Mostrar en menu</label>
																	{{ Form::select('mostrar_menu', array('si' => 'Si', 'no' => 'No'), 'si', array('id' =>'mostrar_menu')) }}
																</div>
																<!-- PHONE FIELD : end -->

																<!-- PHONE FIELD : begin -->
																<div class="form-field">
																	<label for="contact-phone">URL CEO</label>
																	{{ Form::text('url_seo', '', array('id' => 'url_seo', 'placeholder' => 'Ingrese URL CEO')) }}
																</div>
																<!-- PHONE FIELD : end -->

																<!-- PHONE FIELD : begin -->
																<div class="form-field">
																	<label for="contact-phone">URL CEO PADRE</label>
																	{{ Form::text('padre', '', array('id' => 'padre', 'placeholder' => 'Ingrese URL CEO del padre, vacio es principal')) }}
																</div>
																<!-- PHONE FIELD : end -->


															</div>
															<div class="col-sm-8">


																<!-- MESSAGE FIELD : begin -->
																<div class="form-field">
																	<label for="contact-message">Pagina <span>*</span></label>
																	{{ Form::textarea('html', '', array('id' => 'html', 'rows' => '12','placeholder' => 'Contenido pagina')) }}
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
