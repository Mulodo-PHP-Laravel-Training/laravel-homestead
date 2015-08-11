@extends('todc.master') 
@section('content')
@include('todc.introduce.main-controllers');
<!--main-->

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-lg-12">@include('todc.controllers.detail-1')</div>
		<div class="col-lg-12" id="c2">@include('todc.controllers.detail-2')</div>
		<div class="col-lg-12" id="c3">@include('todc.controllers.detail-3')</div>
		<div class="col-lg-12" id="c4">@include('todc.controllers.detail-4')</div>
		<div class="col-lg-12" id="c5">@include('todc.controllers.detail-5')</div>
		<div class="col-lg-12" id="c6">@include('todc.controllers.detail-6')</div>
	</div>
	<hr>

	<footer>
		<p>© Mulodo 2015</p>
	</footer>
</div>

<!--/main-->
@stop
