@extends('todc.master') 
@section('content')
@include('todc.introduce.main-middleware');
<!--main-->

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-lg-12">@include('todc.middleware.detail-1')</div>
		<div class="col-lg-12" id="m2">@include('todc.middleware.detail-2')</div>
		<div class="col-lg-12" id="m3">@include('todc.middleware.detail-3')</div>
		<div class="col-lg-12" id="m4">@include('todc.middleware.detail-4')</div>
	</div>
	<hr>

	<!-- footer -->
		@include('todc.footer')
	<!-- footer -->
</div>

<!--/main-->
@stop
