@extends('todc.master') 
@section('content')
@include('todc.introduce.main-cheatsheets')
<!--main-->

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-lg-12">@include('todc.cheatsheets.detail-1')</div>
		<div class="col-lg-12" id= "cs2">@include('todc.cheatsheets.detail-2')</div>
	</div>
	<hr>

	<!-- footer -->
		@include('todc.footer')
	<!-- footer -->
</div>

<!--/main-->
@stop
