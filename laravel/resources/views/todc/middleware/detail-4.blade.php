<h2>Terminable Middleware</h2>
<p>
	Sometimes a middleware may need to do some work after the
	<code>HTTP response</code>
	has already been sent to the browser. For example, the
	<code>"session" middleware</code>
	included with Laravel writes the session data to storage after the
	response has been sent to the browser. To accomplish this, define the
	middleware as "terminable" by adding a terminate method to the
	middleware:
</p>
<pre>
namespace Illuminate\Session\Middleware;

use Closure;

class StartSession
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        // Store the session data...
    }
}
</pre>
<p>The terminate method should receive both the request and the
	response. Once you have defined a terminable middleware, you should add
	it to the list of global middlewares in your <code>HTTP kernel</code>.</p>
<p>When calling the terminate method on your middleware, Laravel will
	resolve a fresh instance of the middleware from the service container.
	If you would like to use the same middleware instance when the handle
	and terminate methods are called, register the middleware with the
	container using the container's singleton method.</p>