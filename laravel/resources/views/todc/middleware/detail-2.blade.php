<h2>Registering Middleware</h2>
<h3>Global Middleware</h3>
<p>
	If you want a middleware to be run during every HTTP request to your
	application, simply list the middleware class in the
	<code>$middleware</code>
	property of your
	<code>app/Http/Kernel.php</code>
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
    	// Tien Nguyen -- adding my middlewares for global using
    	\App\Http\Middleware\TermMiddleware::class,
    ];
</pre>
<hr>
<h3>Assigning Middleware To Routes</h3>
<p>
	If you would like to assign middleware to specific routes, you should
	first assign the middleware a short-hand key in your
	<code>app/Http/Kernel.php</code>
	file. By default, the
	<code>$routeMiddleware</code>
	property of this class contains entries for the middleware included
	with Laravel. To add your own, simply append it to this list and assign
	it a key of your choosing. For example:
</p>
<pre>
protected $routeMiddleware = [
   'auth' => \App\Http\Middleware\Authenticate::class,
   'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
   'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
   // Tien Nguyen -- adding my middlewares for specific routes
  'role' => \App\Http\Middleware\RoleMiddleware::class,
    ];
</pre>
<p>
	Once the middleware has been defined in the HTTP kernel, you may use
	the
	<code>middleware</code>
	key in the route options array:
</p>
<pre>
Route::get('admin/profile', ['middleware' => 'auth', function () {
    // 
}]);
</pre>