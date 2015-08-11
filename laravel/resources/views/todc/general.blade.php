@extends('todc.master') 
@section('content')
@include('todc.introduce.main-general');
<!--main-->

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-lg-12">@include('todc.general.detail-1')</div>
		<div class="col-lg-12" id= "g2">@include('todc.general.detail-2')</div>
		<div class="col-lg-12" id= "g6">@include('todc.general.detail-6')</div>
		<div class="col-lg-12" id= "g3">@include('todc.general.detail-3')</div>
		<div class="col-lg-12" id= "g5">@include('todc.general.detail-5')</div>
		<div class="col-lg-12" id= "g4">@include('todc.general.detail-4')</div>
	</div>
	<hr>

	<!-- footer -->
		@include('todc.footer')
	<!-- footer -->
</div>

<!--/main-->
@stop
