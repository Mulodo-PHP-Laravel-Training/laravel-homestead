@extends('todc.master') 
@section('content')
@include('todc.introduce.main-requests');
<!--main-->

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-lg-12">@include('todc.requests.detail-1')</div>
		<div class="col-lg-12" id= "r2">@include('todc.requests.detail-2')</div>
	</div>
	<hr>

	<!-- footer -->
		@include('todc.footer')
	<!-- footer -->
</div>

<!--/main-->
@stop
