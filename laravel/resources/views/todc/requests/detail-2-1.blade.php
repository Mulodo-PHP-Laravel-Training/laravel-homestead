<h3>Old Input</h3>
<p>
	Laravel allows you to keep input from one request during the next
	request. This feature is particularly useful for re-populating forms
	after detecting validation errors. However, if you are using Laravel's
	included validation services, it is unlikely you will need to manually
	use these methods, as some of Laravel's built-in
	<code>validation facilities</code>
	will call them automatically.
</p>
<h4>Flashing Input To The Session</h4>
<p>
	The flash method on the Illuminate\Http\Request instance will flash the
	current input to the
	<code>session</code>
	so that it is available during the user's next request to the
	application:
</p>
<pre>$request->flash();</pre>
<h4>Retrieving Old Data</h4>
<pre>$username = $request->old('username');</pre>
