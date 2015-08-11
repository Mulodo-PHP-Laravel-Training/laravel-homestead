<h3>Cookies</h3>
<h4>Retrieving Cookies From The Request</h4>
<p>
	All cookies created by the Laravel framework are encrypted and signed
	with an authentication code, meaning they will be considered invalid if
	they have been changed by the client. To retrieve a cookie value from
	the request, you may use the
	<code>cookie</code>
	method on the
	<code>Illuminate\Http\Request</code>
	instance
</p>
<pre>$value = $request->cookie('name');</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('/retrieve-cookie') }}"
		role="button">View example (researching)</a>
</p>
<!-- open form -->
{!! Form::open(array('class' => 'form', 'method' => 'post', 'url' =>
url('/retrieve-cookie'))) !!} {!! Form::submit('Submit (researching)', array('class'=>'btn
btn-lg btn-danger')) !!} {!! Form::close() !!}
<!-- close form -->
<hr>
<h4>Attaching A New Cookie To A Response</h4>
<p>
	Laravel provides a global cookie helper function which serves as a
	simple factory for generating new
	<code>Symfony\Component\HttpFoundation\Cookie</code>
	instances. The
	<code>cookies</code>
	may be attached to a
	<code>Illuminate\Http\Response</code>
	instance using the withCookie method
</p>
<pre>
// In UserController.php
$response = new Illuminate\Http\Response('Hello World');
$response->withCookie(cookie('name', 'value', $minutes));
return $response;
</pre>
<p>
	<a1 class="btn btn-lg btn-primary" href="{{ url('/cookie-response') }}"
		role="button">View example (researching)</a1>
</p>
<p>To create a long-lived cookie, which lasts for five years, you may
	use the forever method on the cookie factory by first calling the
	cookie helper with no arguments, and then chaining the forever method
	onto the returned cookie factory</p>
<pre>$response->withCookie(cookie()->forever('name', 'value'));</pre>