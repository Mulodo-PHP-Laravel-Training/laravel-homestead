@extends('todc.master') 
@section('content')
@include('todc.introduce.main-responses');
<!--main-->

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-lg-12">@include('todc.responses.detail-1')</div>
		<div class="col-lg-12" id="rs2">@include('todc.responses.detail-2')</div>
		<div class="col-lg-12" id="rs3">@include('todc.responses.detail-3')</div>
		<div class="col-lg-12" id="rs4">@include('todc.responses.detail-4')</div>
	</div>
	<hr>

	<!-- footer -->
		@include('todc.footer')
	<!-- footer -->
</div>

<!--/main-->
@stop
