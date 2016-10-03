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

													<h2>Modificar página</h2><br>

                            {{ Form::open(array('url' => URL::to('/pages/' . $page->id), 'method' => 'PUT', 'class' => 'default-form')) }}
														<input type="hidden" name="contact-form">

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


														<div class="row">
															<div class="col-sm-4">

																<!-- NAME FIELD : begin -->
																<div class="form-field">
																	<label for="contact-name">Titular <span>*</span></label>
																	{{ Form::text('page', $page->page, array('class' => 'm-required', 'id' => 'page', 'placeholder' => 'Ingrese el titular')) }}
																</div>
																<!-- NAME FIELD : end -->

																<div class="form-field">
																	<label for="contact-email">Lang <span>*</span></label>
																	{{ Form::select('lang', array('en' => 'en', 'es' => 'es'), $page->lang, array('id' =>'lang')) }}
																</div>


																<!-- EMAIL FIELD : begin -->
																<div class="form-field">
																	<label for="contact-email">Activo <span>*</span></label>
																	{{ Form::select('activo', array('si' => 'Si', 'no' => 'No'), $page->activo, array('id' =>'activo')) }}
																</div>
																<!-- EMAIL FIELD : end -->

																<!-- PHONE FIELD : begin -->
																<div class="form-field">
																	<label for="contact-phone">Mostrar en menu</label>
																	{{ Form::select('mostrar_menu', array('si' => 'Si', 'no' => 'No'), $page->mostrar_menu, array('id' =>'mostrar_menu')) }}
																</div>
																<!-- PHONE FIELD : end -->

																<!-- PHONE FIELD : begin -->
																<div class="form-field">
																	<label for="contact-phone">URL CEO</label>
																	{{ Form::text('url_seo', $page->url_seo, array('id' => 'url_seo', 'placeholder' => 'Ingrese URL CEO')) }}
																</div>
																<!-- PHONE FIELD : end -->

																<!-- PHONE FIELD : begin -->
																<div class="form-field">
																	<label for="contact-phone">URL CEO PADRE</label>
																	{{ Form::text('padre', $page->padre, array('id' => 'padre', 'placeholder' => 'Ingrese URL CEO del padre, vacio es principal')) }}
																</div>
																<!-- PHONE FIELD : end -->


															</div>
															<div class="col-sm-8">


																<!-- MESSAGE FIELD : begin -->
																<div class="form-field">
																	<label for="contact-message">Pagina <span>*</span></label>
																	{{ Form::textarea('html', $page->html, array('id' => 'html', 'rows' => '12','placeholder' => 'Contenido pagina')) }}
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
