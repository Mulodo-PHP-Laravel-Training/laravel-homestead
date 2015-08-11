<h2>Defining Middleware</h2>
<p>To create a new middleware, use the <code>make:middleware</code> Artisan command:
</p>
<pre>
php artisan make:middleware OldMiddleware
</pre>
<p>
	This command will place a new
	<code>OldMiddleware</code>
	class within your
	<code>app/Http/Middleware</code>
	directory. In this middleware, we will only allow access to the route
	if the supplied
	<code>age</code>
	is greater than 200. Otherwise, we will redirect the users back to the
	"home" URI.
</p>

<pre>
namespace App\Http\Middleware;

use Closure;

class OldMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->input('age') <= 200) {
            return redirect('home');
        }

        return $next($request);
    }

}
</pre>
<hr>
<h3>Before / After Middleware</h3>
<p>Whether a middleware runs before or after a request depends on the
	middleware itself. For example, the following middleware would perform
	some task before the request is handled by the application:</p>
<pre>
namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
{
    public function handle($request, Closure $next)
    {
        // Perform action

        return $next($request);
    }
}
</pre>
<p>
	However, this middleware would perform its task after the request is handled by the application:
</p>
<pre>
namespace App\Http\Middleware;

use Closure;

class AfterMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Perform action

        return $response;
    }
}
</pre>