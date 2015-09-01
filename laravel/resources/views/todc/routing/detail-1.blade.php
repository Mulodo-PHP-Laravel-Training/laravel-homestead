<h2>Basic Routing</h2>
<p>
	You will define most of the routes for your application in the
	<code>app/Http/routes.php</code>
	file, which is loaded by the
	<code>App\Providers\RouteServiceProvider</code>
	class. The most basic Laravel routes simply accept a URI and a
	<code>Closure</code>
</p>

<pre>
Route::get('/', function () {
    return 'Hello World';
});
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('/') }}" role="button">View
		example</a>
</p>

<pre>
Route::post('foo/bar', function () {
    return 'Post data';
});

Route::put('foo/bar', function () {
    return 'Put data';
});

Route::delete('foo/bar', function () {
    return 'Delete data';
});
</pre>

<div class="row">
	<div class="col-md-1">
		<!-- open form -->
		{!! Form::open(array('class' => 'form', 'method' => 'post', 'url' =>
		url('foo/bar'))) !!} {!! Form::submit('Post', array('class'=>'btn
		btn-lg btn-danger')) !!} {!! Form::close() !!}
		<!-- close form -->
	</div>
	<div class="col-md-1">
		<form method="POST" action="http://homestead.app/foo/bar" accept-charset="UTF-8" class="form"> <input class="btn
		btn-lg btn-danger" type="submit" value="Post 2"> </form>
	</div>
	<div class="col-md-1">
		<!-- open form -->
		{!! Form::open(array('class' => 'form', 'method' => 'put', 'url' =>
		url('foo/bar'))) !!} {!! Form::submit('Put', array('class'=>'btn
		btn-lg btn-danger')) !!} {!! Form::close() !!}
		<!-- close form -->
	</div>
	<div class="col-md-1">
		<!-- open form -->
		{!! Form::open(array('class' => 'form', 'method' => 'delete', 'url' =>
		url('foo/bar'))) !!} {!! Form::submit('Delete', array('class'=>'btn
		btn-lg btn-danger')) !!} {!! Form::close() !!}
		<!-- close form -->
	</div>
</div>

<hr>
<h3>Registering A Route For Multiple Verbs</h3>
<p>
	Sometimes you may need to register a route that responds to multiple
	HTTP verbs. You may do so using the
	<code>match</code>
	method on the
	<code>Route facade</code>
	:
</p>
<pre>
Route::match(['get', 'post'], '/routing-submit', function () {
    return 'Registering A Route For Multiple Verbs such as: get and post.';
});
</pre>
<!-- open form -->
{!! Form::open(array('class' => 'form', 'method' => 'post', 'url' =>
url('/routing-submit'))) !!} {!! Form::submit('Post',
array('class'=>'btn btn-lg btn-danger')) !!} {!! Form::close() !!}
<!-- close form -->
<p>
	Or, you may even register a route that responds to all HTTP verbs using
	the
	<code>any</code>
	method:
</p>
<pre>
Route::any('foo', function () {
    return 'Register a route that responds to all HTTP verbs such as: post, delete, put, delete';
});
</pre>
<!-- open form -->
{!! Form::open(array('class' => 'form', 'method' => 'post', 'url' =>
url('/foo'))) !!} {!! Form::submit('Post', array('class'=>'btn btn-lg
btn-danger')) !!} {!! Form::close() !!}
<!-- close form -->
<hr>
<h3>Generating URLs To Routes</h3>
<p>
	You may generate URLs to your application's routes using the
	<code>url</code>
	helper:
</p>
<pre>
// simple url
$url = url('foo');
// url with parameters
$url = url('route-name', ['param1', 'param2']);
// or using route name
$url = route('foo');
// route with parameters
$url = route('route-name', ['param1', 'param2']);
</pre>