<h3>Defining A Layout</h3>
<p>Two of the primary benefits of using Blade are template inheritance
	and sections. To get started, let's take a look at a simple example.
	First, we will examine a "master" page layout. Since most web
	applications maintain the same general layout across various pages,
	it's convenient to define this layout as a single Blade view:</p>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('/') }}" role="button">resources/views/todc/routing.blade.php</a>
	<a class="btn btn-lg btn-primary" href="{{ url('/') }}" role="button">resources/views/todc/master.blade.php</a>
</p>
