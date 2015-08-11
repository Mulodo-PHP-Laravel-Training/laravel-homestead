<h2>Middleware Parameters</h2>
<p>
	Middleware can also receive additional custom parameters. For example,
	if your application needs to verify that the authenticated user has a
	given "role" before performing a given action, you could create a
	<code>RoleMiddleware</code>
	that receives a role name as an additional argument.
</p>
<p>Additional middleware parameters will be passed to the middleware
	after the $next argument:</p>
<pre>
namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
            // Redirect...
        }

        return $next($request);
    }

}
</pre>
<p>Middleware parameters may be specified when defining the route by
	separating the middleware name and parameters with a <code>:.</code> Multiple
	parameters should be delimited by commas:</p>
<pre>
Route::put('post/{id}', ['middleware' => 'role:editor', function ($id) {
    //
}]);
</pre>