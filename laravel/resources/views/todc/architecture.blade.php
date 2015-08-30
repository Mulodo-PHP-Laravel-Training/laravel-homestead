@extends('todc.master') 
@section('content')
@include('todc.introduce.main-architecture');
<!--main-->

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-lg-12">@include('todc.architecture.detail-1')</div>
		<div class="col-lg-12" id="vt2-1">@include('todc.architecture.detail-2')</div>
	</div>
	<hr>

	<!-- footer -->
		@include('todc.footer')
	<!-- footer -->
</div>

<!--/main-->
@stop
