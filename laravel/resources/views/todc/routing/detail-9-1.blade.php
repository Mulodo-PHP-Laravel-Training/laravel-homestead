<h3>Routes for subdomain</h3>
<p></p>
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
		href="http://vytien.homestead.app/subdomain" role="button"> View
		example 1 </a> <a class="btn btn-lg btn-primary"
		href="http://vytien.homestead.app/user-sub/113" role="button"> View
		example 2 </a>
</p>
<hr>
<h3>
	<span class="label label-danger">Notes</span>
</h3>
<ul>
	<li>Need to separate URI between domain and subdomain. URI cannot
		overwrite from subdomain. <pre>
Route::get ( 'user/{id}', function ($id) {
	return 'UserId ' . $id;
} );

Route::group(['domain' => '{account}.homestead.app'], function ($account) {
	Route::get('user/{id}', function ($account, $id) {
		return $account.".homestead.app userid ".$id;
	});
});
</pre>
		<p>
			<a class="btn btn-lg btn-primary"
				href="http://vytien.homestead.app/user/113" role="button"> View
				example </a>
		</p>
		<div class="alert alert-warning">System will get result from parents'
			route instead of subdomain's route</div>
	</li>
	<li>All routes can be reused in subdomain from parents' routes.
	<li>All routes are created for subdomain ⇒ domain cannot use them.
</ul>