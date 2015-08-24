@extends('todc.master') 
@section('content')
@include('todc.introduce.main-vagrant')
<!--main-->

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-lg-12" id= "vt2">@include('todc.vagrant.detail-1')</div>
		<div class="col-lg-12" id= "vt2">@include('todc.vagrant.detail-2')</div>
		<div class="col-lg-12" id= "vt3">@include('todc.vagrant.detail-3')</div>
	</div>
	<hr>

	<!-- footer -->
		@include('todc.footer')
	<!-- footer -->
</div>

<!--/main-->
@stop
