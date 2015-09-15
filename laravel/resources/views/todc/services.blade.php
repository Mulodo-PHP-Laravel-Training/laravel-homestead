@extends('todc.master') 
@section('content')
@include('todc.introduce.main-services');
<!--main-->

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-lg-12" id="vt1">@include('todc.services.detail-1')</div>
		<div class="col-lg-12" id="vt4">@include('todc.services.detail-4')</div>
		<div class="col-lg-12" id="vt2">@include('todc.services.detail-2')</div>
		<div class="col-lg-12" id="vt3">@include('todc.services.detail-3')</div>
	</div>
	<hr>

	<!-- footer -->
		@include('todc.footer')
	<!-- footer -->
</div>

<!--/main-->
@stop
