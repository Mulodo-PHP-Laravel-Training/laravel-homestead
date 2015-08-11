@extends('master') @section('content')
<!--main-->
<div class="container" id="main">
	<div class="row">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Defining Middleware</h4>
			</div>
			<div class="panel-body">
				<p>
					To create a new middleware, use the make:middleware Artisan
					command:
					<code>php artisan make:middleware OldMiddleware</code>
				</p>
				<p>Add your functions into file
					"app/Http/Middleware/OldMiddleware.php"</p>
				<hr>
				<h5>Before / After Middleware</h5>
				<p>
					<code>php artisan make:middleware BeforeMiddleware</code>
				</p>
				<p>
					<code>php artisan make:middleware AfterMiddleware</code>
				</p>
				<p>Whether a middleware runs before or after a request depends on
					the middleware itself.</p>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Registering Middleware</h4>
			</div>
			<div class="panel-body">
				<h5>Global Middleware</h5>
				<p>
					If you want a middleware to be run during every HTTP request to
					your application, simply list the middleware class in the
					<code>$middleware</code>
					property of your
					<code>app/Http/Kernel.php </code>
					class.
				</p>
				<pre>
					protected $middleware = [ 
					\Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
					\App\Http\Middleware\EncryptCookies::class,
					\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
					\Illuminate\Session\Middleware\StartSession::class,
					\Illuminate\View\Middleware\ShareErrorsFromSession::class,
					\App\Http\Middleware\VerifyCsrfToken::class,
					<code>
						// add your middleware classes in here
					</code>
					];
				</pre>
			</div>
			<div class="panel-body">
				<h5>Specific Routes</h5>
				<p>
					If you want a middleware to be run into specific routes, simply
					list the middleware class in the
					<code>$routeMiddleware</code>
					property with short-hand key of your
					<code>app/Http/Kernel.php </code>
					class.
				</p>
				<pre>
					protected $routeMiddleware = [  'auth' =>
					\App\Http\Middleware\Authenticate::class, 'auth.basic' =>
					\Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
					'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
					<code>
						// add your middleware classes with short-hand keys in here
					</code>
					];
				</pre>
				<p>
					Example: <a href="{{ url('admin/profile') }}">Before going to
						"admin/profile", system need to authenticate account.</a>
				</p>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Middleware Parameters</h4>
			</div>
			<div class="panel-body">
				<p>
					<a href="{{ url('post', 1) }}">Right role</a>
				</p>
			</div>
			<hr>
			<div class="panel-heading">
				<h4>Terminable Middleware</h4>
			</div>
			<div class="panel-body">
				<p>Sometimes a middleware may need to do some work after the
					response has already been sent to the browser.To accomplish this,
					you may define the middleware as “terminable”.</p>
				<p>You have to implement "TerminableMiddleware" interface and it’s
					method terminate($request, $response) which has request and
					response as parameter.</p>
				<p>Once you have defined a terminable middleware, you should add it
					to the list of global middlewares in your app/Http/kernel.php</p>
			</div>
		</div>


	</div>
	<!--/row-->

	<hr>
</div>
<!--/main-->
@stop
