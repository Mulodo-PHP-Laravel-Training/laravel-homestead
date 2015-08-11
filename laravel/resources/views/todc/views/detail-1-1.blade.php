<p>
	Since this view is stored at
	<code>resources/views/views.blade.php</code>
	, we may return it using the global view helper function like so:
</p>
<pre>
Route::get('/greeting', function ()    {
    return view('todc.views.samples.sample-1', ['name' => 'Tien Nguyen']);
});
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('/greeting') }}"
		role="button">View example</a>
</p>
