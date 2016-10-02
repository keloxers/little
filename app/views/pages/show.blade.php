@extends('layouts.default')
@section('content')

<!-- PAGE HEADER : begin -->
<div id="page-header">
	<div class="container">
		<h1>{{$page->page}}</h1>
	</div>
</div>
<!-- PAGE HEADER : end -->



<div class="container">
	<div class="row">
		<div class="col-md-12">



{{$page->html}}

    <br><br><br>
    </div>
  </div>
</div>
@stop
