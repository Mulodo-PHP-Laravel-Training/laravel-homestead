@extends('mulodo.master') @section('content')
<div class="fix-header" id="home">
	<div class="w-container">
		<div class="w-nav" data-collapse="medium" data-animation="default"
			data-duration="400"></div>
	</div>
</div>

@include('mulodo.nav') 
@include('mulodo.content.home', $sliders)
@include('mulodo.content.about') 
@include('mulodo.content.services')
@include('mulodo.content.call-action')
@include('mulodo.content.services-2', $services) 
@include('mulodo.content.process', $processes)
@include('mulodo.content.portfolio', $portfolio) 
@include('mulodo.content.plan', $plans)
@include('mulodo.content.team',$teamMembers)
@include('mulodo.content.clients', $clients)
@include('mulodo.content.contact') 

@stop

<!-- {!! $sliders[0] !!} -->
