@extends('master') @section('content')
<!--main-->
<div class="container" id="main">
	<div class="col-md-6 col-sm-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Basic Routing</h4>
			</div>
			<div class="panel-body">
				<p>
					You will define most of the routes for your application in the
					<code>app/Http/routes.php</code>
					file, which is loaded by the
					<code>App\Providers\RouteServiceProvider</code>
					class. The most basic Laravel routes simply accept a URI and a
					<code>Closure</code>
					:
				</p>
				<pre>
				Route::get('/', function () {
				    return 'Hello World';
				});
				</pre>
				<p>
					<a href="{{ url('/') }}">Example</a>
				</p>
				<pre>
				Route::post('foo/bar', function () {
				    return 'Hello World';
				});
				</pre>
				<p>
					Example:
					<!-- open form -->
					{!! Form::open(array('class' => 'form', 'method' => 'post', 'url'
					=> url('foo/bar'))) !!}
				
				
				<div class="input-group text-center">
					{!! Form::text('email', null, array('class'=>'form-control
					input-lg', 'placeholder'=>'Enter your email address')) !!} <span
						class="input-group-btn"> {!! Form::submit('POST',
						array('class'=>'btn btn-lg btn-primary')) !!} </span>

				</div>
				{!! Form::close() !!}
				<!-- close form -->
				</p>
				<pre>
				Route::put('foo/bar', function () {
				    //
				});
				</pre>
				<p>
					Example:
					<!-- open form -->
					{!! Form::open(array('class' => 'form', 'method' => 'put', 'url' =>
					url('foo/bar'))) !!}
				
				
				<div class="input-group text-center">
					{!! Form::text('email', null, array('class'=>'form-control
					input-lg', 'placeholder'=>'Enter your email address')) !!} <span
						class="input-group-btn"> {!! Form::submit('PUT',
						array('class'=>'btn btn-lg btn-primary')) !!} </span>

				</div>
				{!! Form::close() !!}
				<!-- close form -->
				</p>
				<pre>
				Route::delete('foo/bar', function () {
				    //
				});
				</pre>
				<p>
					Example:
					<!-- open form -->
					{!! Form::open(array('class' => 'form', 'method' => 'delete', 'url'
					=> url('foo/bar'))) !!}
				
				
				<div class="input-group text-center">
					{!! Form::text('email', null, array('class'=>'form-control
					input-lg', 'placeholder'=>'Enter your email address')) !!} <span
						class="input-group-btn"> {!! Form::submit('DELETE',
						array('class'=>'btn btn-lg btn-primary')) !!} </span>

				</div>
				{!! Form::close() !!}
				<!-- close form -->
				</p>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Registering A Route For Multiple Verbs</h4>
			</div>
			<div class="panel-body">
				<p>
					Sometimes you may need to register a route that responds to
					multiple HTTP verbs. You may do so using the
					<code>match</code>
					method on the
					<code>Route facade</code>
					:
				</p>
				<pre>
				Route::match(['get', 'post'], '/routing-submit', function () {
				    return 'Hello World';
				});
				</pre>
				<p>
					Example:
					<!-- open form -->
					{!! Form::open(array('class' => 'form', 'method' => 'post', 'url'
					=> url('/routing-submit'))) !!}
				
				
				<div class="input-group text-center">
					{!! Form::text('email', null, array('class'=>'form-control
					input-lg', 'placeholder'=>'Enter your email address')) !!} <span
						class="input-group-btn"> {!! Form::submit('POST',
						array('class'=>'btn btn-lg btn-primary')) !!} </span>

				</div>
				{!! Form::close() !!}
				<!-- close form -->
				</p>
				<hr>
				<p>
					Or, you may even register a route that responds to all HTTP verbs
					using the
					<code>any</code>
					method:
				</p>
				<pre>
				Route::any('foo', function () {
				    return 'Hello World';
				});
				</pre>
				<p>
					Example:
					<!-- open form -->
					{!! Form::open(array('class' => 'form', 'method' => 'post', 'url'
					=> url('/foo'))) !!}
				
				
				<div class="input-group text-center">
					{!! Form::text('email', null, array('class'=>'form-control
					input-lg', 'placeholder'=>'Enter your email address')) !!} <span
						class="input-group-btn"> {!! Form::submit('POST',
						array('class'=>'btn btn-lg btn-primary')) !!} </span>

				</div>
				{!! Form::close() !!}
				<!-- close form -->
				</p>
				<hr>
				<h5>Generating URLs To Routes</h5>
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
			</div>
		</div>
	</div>
	<!--/row-->

	<div class="col-md-6 col-sm-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Route Parameters</h4>
			</div>
			<div class="panel-body">
				<h5>Required Parameters</h5>
				<p>Of course, sometimes you will need to capture segments of the URI
					within your route. For example, you may need to capture a user's ID
					from the URL. You may do so by defining route parameters:</p>
				<pre>
					Route::get('user/{id}', function ($id) {
					    return 'User '.$id;
					});		
				</pre>
				<p>
					<a href="{{ url('user', 1) }}">Example</a>
				</p>
				<hr>
				<p>You may define as many route parameters as required by your
					route:</p>
				<p>Route parameters are always encased within "curly" braces. The
					parameters will be passed into your route's Closure when the route
					is executed.</p>
				<pre>
Route::get('posts/{post}/comments/{comment}', 
function ($postId, $commentId) {
    //
});
			</pre>
				<p>
					<a href="{{ route('comment-post', [1, 3]) }}">Example</a>
				</p>
				<hr>
				<h5>Optional Parameters</h5>
				<p>Occasionally you may need to specify a route parameter, but make
					the presence of that route parameter optional. You may do so by
					placing a ? mark after the parameter name:</p>
				<pre>
Route::get('user/{name?}', function ($name = null) {
    return $name;
});
</pre>
				<p>
					<a href="{{ url('user1', 'Tien') }}">Example</a>
				</p>
				<pre>
Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});
				</pre>
				<p>
					<a href="{{ url('user2', 'Anna') }}">Example</a>
				</p>
				<hr>
				<h5>Regular Expression Constraints</h5>
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
    //
})
->where('name', '[A-Za-z]+');
</pre>
				<p>
					<a href="{{ url('user3', 'Tien') }}">Example</a>
				</p>
				<pre>
Route::get('user/{id}', function ($id) {
    //
})
->where('id', '[0-9]+');
</pre>
				<p>
					<a href="{{ url('user4', '101') }}">Example</a>
				</p>
				<pre>
Route::get('user/{id}/{name}', function ($id, $name) {
    //
})
->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
			</pre>
				<p>
					<a href="{{ url('user5', [1 ,'anna']) }}">Example</a>
				</p>
			</div>

		</div>
	</div>
	<!--/row-->

	<div class="col-md-6 col-sm-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Global Constraints</h4>
			</div>
			<div class="panel-body">
				<p>
					If you would like a route parameter to always be constrained by a
					given regular expression, you may use the
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
				<p>Once the pattern has been defined, it is automatically applied to
					all routes using that parameter name:</p>
				<pre>
			Route::get('user/{id}', function ($id) {
    // Only called if {id} is numeric.
});
			</pre>
			</div>
		</div>
	</div>
	</div>
	<!--/main-->
	@stop