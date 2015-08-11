@extends('todc.master') 
@section('content')
@include('todc.introduce.main-blade');
<!--main-->

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-lg-12">@include('todc.blade.detail-1')</div>
		<div class="col-lg-12" id="b2">@include('todc.blade.detail-2')</div>
		<div class="col-lg-12" id="b3">@include('todc.blade.detail-3')</div>
		<div class="col-lg-12" id="b4">@include('todc.blade.detail-4')</div>
		<div class="col-lg-12" id="b5">@include('todc.blade.detail-5')</div>
	</div>
	<hr>

	<footer>
		<p>© Mulodo 2015</p>
	</footer>
</div>

<!--/main-->
@stop
