@extends('layouts.default')
@section('content')


					<section>



								{{ Form::open(array('action' => 'SessionController@store', 'class' => 'default-form')) }}
								<div class="row">
									<div class="col-md-10">

										<!-- TEXT : begin -->
										<div class="form-field">
											<label for="text-1">Email</label>
											{{ Form::text('email', null, array('class' => 'm-required', 'placeholder' => trans('users.email'), 'autofocus')) }}
										</div>
										<!-- TEXT : end -->

										<div class="form-field">
											<label for="text-1">Password</label>
											{{ Form::password('password', array('class' => 'form-control', 'placeholder' => trans('users.pword')))}}
										</div>

										<div class="form-field">
											<a href="{{ route('forgotPasswordForm') }}">
												{{trans('pages.password_reset')}}?
											</a>
										</div>


												{{ Form::submit(trans('pages.login'), array('class' => 'c-button'))}}


									</div>
									<div class="col-md-2">



									</div>
								</div>
							{{ Form::close() }}

						</section>
													<!-- FORM SECTION : end -->


@stop
