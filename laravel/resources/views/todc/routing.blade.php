@extends('todc.master') 
@section('content')
@include('todc.introduce.main-routing');
<!--main-->

<div class="container-fluid">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-lg-12">@include('todc.routing.detail-1')</div>
		<div class="col-lg-12" id="r2">@include('todc.routing.detail-2')</div>
		<div class="col-lg-12" id="r3">@include('todc.routing.detail-3')</div>
		<div class="col-lg-12" id="r4">@include('todc.routing.detail-4')</div>
		<div class="col-lg-12" id="r5">@include('todc.routing.detail-5')</div>
		<div class="col-lg-12" id="r6">@include('todc.routing.detail-6')</div>
		<div class="col-lg-12" id="r7">@include('todc.routing.detail-7')</div>
		<div class="col-lg-12" id="r8">@include('todc.routing.detail-8')</div>
		<div class="col-lg-12" id="r9">@include('todc.routing.detail-9')</div>
	</div>
	<hr>

	<!-- footer -->
		@include('todc.footer')
	<!-- footer -->
</div>

<!--/main-->
@stop
