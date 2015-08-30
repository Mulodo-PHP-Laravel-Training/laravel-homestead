<h2 id="vt2-2">Handling errors in Laravel</h2>
<p>
	Its very easy to handle errors or missing
	<code>files/routes</code>
	with Laravel. Handled in
	<code>app/start/global.php</code>
</p>
<pre>
/* handles the 404 errors, missing route errors etc*/ 
App::missing(function($exception) {
	return Redirect::to('/'); 
});

App::error(function(Exception $exception, $code) { 
	Log::error($exception);
});

App::fatal(function($exception){ 
	Log::error($exception);
});
</pre>