<h2>Route Groups</h2>
<p>
	Route groups allow you to share route attributes, such as middleware or
	namespaces, across a large number of routes without needing to define
	those attributes on each individual routes. Shared attributes are
	specified in an array format as the first parameter to the
	<code>Route::group</code>
	method. To learn more about route groups, we'll walk through several
	common use-cases for the feature.
</p>
<h3>Middleware</h3>
<p>
	To assign middleware to all routes within a group, you may use the
	<code>middleware</code>
	key in the group attribute array. Middleware will be executed in the
	order you define this array:
</p>
<p>
<pre>
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function ()    {
        return "Uses Auth Middleware";
    });

    Route::get('user/profile', function () {
        return "Uses Auth Middleware";
    });
});
</pre>
<hr>
<h3>Namespaces</h3>
<p>
	Another common use-case for route groups is assigning the same PHP
	namespace to a group of controllers. You may use the
	<code>namespace</code>
	parameter in your group attribute array to specify the namespace for
	all controllers within the group:
</p>
<pre>
Route::group(['namespace' => 'Admin'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::group(['namespace' => 'User'], function()
    {
        // Controllers Within The "App\Http\Controllers\Admin\User" Namespace
    });
});
</pre>
<p>
	Remember, by default, the
	<code>RouteServiceProvider</code>
	includes your
	<code>routes.php</code>
	file within a namespace group, allowing you to register controller
	routes without specifying the full
	<code>App\Http\Controllers</code>
	namespace prefix. So, we only need to specify the portion of the
	namespace that comes after the base
	<code>App\Http\Controllers</code>
	namespace root.
</p>
<hr>
<h3>Sub-Domain Routing</h3>
<p>
	Route groups may also be used to route wildcard sub-domains.
	Sub-domains may be assigned route parameters just like route URIs,
	allowing you to capture a portion of the sub-domain for usage in your
	route or controller. The sub-domain may be specified using the
	<code>domain</code>
	key on the group attribute array:
</p>
<pre>
Route::group ( [ 
		'domain' => '{account}.homestead.app' 
], function ($account) {
	Route::get ( '/subdomain', function () {
		return "sub domain";
	} );
	Route::get ( 'user-sub/{id}', function ($account, $id) {
		return $account . ".homestead.app userid " . $id;
	} );
} );
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="http://vytien.homestead.app/subdomain" role="button">View
		example 1</a> <a class="btn btn-lg btn-primary"
		href="http://vytien.homestead.app/user-sub/113" role="button">View
		example 2</a>
</p>
<hr>
<h3>Route Prefixes</h3>
<p>
	The
	<code>prefix</code>
	group array attribute may be used to prefix each route in the group
	with a given URI. For example, you may want to prefix all route URIs
	within the group with
	<code>admin</code>
	:
</p>
<pre>
Route::group ( [ 
		'prefix' => 'admin' 
], function () {
	Route::get ( 'users', [ 
			"as" => "admin-users",
			function () {
				// Matches The "/admin/users" URL
				return "admin/user";
			} 
	] );
	
	Route::get ( 'customers', [ 
			"as" => "admin-customers",
			function () {
				// Matches The "/admin/customers" URL
				return "admin/customers";
			} 
	] );
	
	Route::get ( 'orders', [ 
			"as" => "admin-orders",
			function () {
				// Matches The "/admin/orders" URL
				return "admin/orders";
			} 
	] );
} );
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('admin/users') }}"
		role="button">View example 1</a> <a class="btn btn-lg btn-primary"
		href="{{ url('admin/customers') }}" role="button">View example 2</a> <a
		class="btn btn-lg btn-primary" href="{{ url('admin/orders') }}"
		role="button">View example 3</a>
</p>
<p>
	You may also use the
	<code>prefix</code>
	parameter to specify common parameters for your grouped routes:
</p>
<pre>
Route::group ( ['prefix' => 'accounts/{account_id}'], function () {
	Route::get ( 'detail', ["as" => "admin-user-profile", 
	function ($account_id) {
	return "Matches The accounts/".$account_id."/detail URL";
	} 
	] );
} );
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ route('admin-user-profile', 113) }}"
		role="button">View example 1</a> 
</p>