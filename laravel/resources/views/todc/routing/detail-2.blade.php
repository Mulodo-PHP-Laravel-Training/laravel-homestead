<h2>Route Parameters</h2>
<h3>Required Parameters</h3>
<p>Of course, sometimes you will need to capture segments of the URI
	within your route. For example, you may need to capture a user's ID
	from the URL. You may do so by defining route parameters:</p>
<pre>
Route::get('user/{id}', function ($id) {
    return 'UserId '.$id;
});
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('user', 1) }}"
		role="button">View example</a>
</p>
<p>You may define as many route parameters as required by your route:</p>
<p>Route parameters are always encased within "curly" braces. The
	parameters will be passed into your route's Closure when the route is
	executed.</p>
<pre>
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post ' . $postId . ' for comment ' . $commentId;
});
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('comment-post', [1, 3]) }}" role="button">View example</a>
</p>
<hr>
<h3>Optional Parameters</h3>
<p>
	Occasionally you may need to specify a route parameter, but make the
	presence of that route parameter optional. You may do so by placing a
	<code>?</code>
	mark after the parameter name:
</p>
<pre>
Route::get('user/{name?}', function ($name = null) {
    return "Username 1: " . $name;
});
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('user1', 'Tien') }}"
		role="button">View example</a>
</p>
<pre>
Route::get('user/{name?}', function ($name = 'John') {
    return "Username 2: " . $name;
});
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('user2', 'Anna') }}"
		role="button">View example</a>
</p>
<hr>
<h3>Regular Expression Constraints</h3>
<p>
	You may constrain the format of your route parameters using the
	<code>where</code>
	method on a route instance. The
	<code>where</code>
	method accepts the name of the parameter and a regular expression
	defining how the parameter should be constrained:
</p>
<pre>
Route::get('user/{name}', function ($name) {
    return "Username 3: " . $name;
})
->where('name', '[A-Za-z]+');
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('user3', 'Tien') }}"
		role="button">View example</a>
</p>
<pre>
Route::get('user/{id}', function ($id) {
    return "Username 4: " . $id;
})
->where('id', '[0-9]+');
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('user4', '101') }}"
		role="button">View example</a>
</p>
<pre>
Route::get('user/{id}/{name}', 
function ($id, $name) {
    return "Username 5: " . $name;
})
->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ url('user5', [1 ,'anna']) }}" role="button">View example</a>
</p>
<hr>
<h3>Global Constraints</h3>
<p>
	If you would like a route parameter to always be constrained by a given
	regular expression, you may use the
	<code>pattern</code>
	method. You should define these patterns in the
	<code>boot</code>
	method of your
	<code>RouteServiceProvider</code>
	:
</p>
<pre>
/**
 * Define your route model bindings, pattern filters, etc.
 *
 * @param  \Illuminate\Routing\Router  $router
 * @return void
 */
public function boot(Router $router)
{
    $router->pattern('id', '[0-9]+');

    parent::boot($router);
}
</pre>
<p>Once the pattern has been defined, it is automatically applied to all routes using that parameter name:

</p>
<pre>
Route::get('user/{id}', function ($id) {
    // Only called if {id} is numeric.
});
</pre>