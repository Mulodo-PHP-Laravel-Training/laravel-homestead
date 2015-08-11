@extends('todc.master') 
@section('content')
@include('todc.introduce.main-models');
<!--main-->

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-lg-12">@include('todc.models.detail-1')</div>
	</div>
	<hr>

	<!-- footer -->
		@include('todc.footer')
	<!-- footer -->
</div>

<!--/main-->
@stop
