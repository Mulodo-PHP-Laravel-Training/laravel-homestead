<h2>Named Routes</h2>
<p>
	Named routes allow you to conveniently generate URLs or redirects for a
	specific route. You may specify a name for a route using the
	<code>as</code>
	array key when defining the route:
</p>
<pre>
Route::get('user6/profile', ['as' => 'profile', function () {
    return "User profile";
}]);
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ route('profile') }}"
		role="button">View example</a>
</p>
<p>You may also specify route names for controller actions:</p>
<pre>
Route::get('user7/profile/{id}', [
    'as' => 'profile-2', 'uses' => 'UserController@showProfile'
]);
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('profile-2', [108]) }}" role="button">View example</a>
</p>
<hr>
<h3>Route Groups & Named Routes</h3>
<p>
	If you are using
	<code>route groups</code>
	, you may specify an as keyword in the route group attribute array,
	allowing you to set a common route name prefix for all routes within
	the group:
</p>
<pre>
Route::group(['as' => 'admin::'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
        return "Route named admin::dashboard";
    }]);
    Route::get('dashboard', ['as' => 'orders', function () {
        return "Route named admin::orders";
    }]);
});
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('admin::dashboard') }}" role="button">View example 1</a>
	<a class="btn btn-lg btn-primary" href="{{ route('admin::orders') }}"
		role="button">View example 2</a>
</p>
<hr>
<h3>Generating URLs To Named Routes</h3>
<p>
	Once you have assigned a name to a given route, you may use the route's
	name when generating URLs or redirects via the
	<code>route</code>
	function:
</p>
<pre>
$url = route('profile');
$redirect = redirect()->route('profile');
</pre>
<p>
	If the route defines parameters, you may pass the parameters as the
	second argument to the
	<code>route</code>
	method. The given parameters will automatically be inserted into the
	URL:
</p>
<pre>
Route::get('user/{id}/profile', ['as' => 'profile-3', function ($id) {
    return "User profile 3";
}]);

//$url = route('profile-3', ['id' => 1]);
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('profile-3', ['id' => 1]) }}" role="button">View
		example 1</a> <a class="btn btn-lg btn-primary"
		href="{{ route('profile-3', [1]) }}" role="button">View example 2</a>
</p>