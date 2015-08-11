<h2>Secure Routes</h2>
<p>You may want your routes to respond to secure HTTP URLs so that they
	can handle confidential data. HTTPS URLs are layered on top of the SSL
	or TLS protocol to allow for increased security when you need it.
	Here’s how you can allow your routes to match this protocol.</p>
<p>By adding the HTTPS index to our routing array, our route will now
	respond to requests made to the route using the HTTPS protocol.</p>
<pre>
Route::get('secret/content', array(
    'https',
    function () {
        return 'Secret squirrel!';
    }
));
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ url('https://homestead.app/secret/content') }}" role="button">View
		example</a>
</p>