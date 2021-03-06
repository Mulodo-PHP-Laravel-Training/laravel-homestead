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
<h3>Summary about routing</h3>
<h4>Implicit Routing</h4>
<pre>
Route::get('news',function(){
	return '<p>News Page</p>';
});

Route::get('news/{id}',function($id){
	return 'News with id '.$id;
})->where('id','[0-9]+')

</pre>
<h4>Routing to Controller</h4>
<pre>
Route::controller('news','NewsController');
Route::controller('login','LoginController');
Route::controller('admin','AdminController');


class NewsController{
	public function getIndex(){...}
	public function getArticles(){...}
	public function postComment(){...}
	public function getAuthorProfile(){...} //news/author-profile
}

</pre>
<h4>Route to Resources (REST)</h4>
<pre>
Route::resource('news','NewsController');


class NewsController{
	public function index(){...}
	public function create(){...}
	public function store(){...}
	public function show(){...}
	public function edit(){...}
	public function update(){...}
	public function destroy(){...}
}

</pre>
<p>You can view all list registered routes by using command <code>php artisan route:list</code>
<p><img src="img/routing-resource.png"></p>
<h4>Route Filtering</h4>
<pre>
Route::filter('old', function()
{
    if (Input::get('age') < 200)
    {
        return Redirect::to('home');
    }
});


Route::get('user', array('before' => 'old', function()
{
    return 'You are over 200 years old!';
}));
</pre>
<p>2 routes above are same meaning with 2 routes below</p>
<pre>
Route::get('user', array('before' => 'old', 'uses' => 'UserController@showProfile'));

Route::get('user', array('before' => 'auth|old', function()
{
    return 'You are authenticated and over 200 years old!';
}));

Route::get('user', array('before' => array('auth', 'old'), function()
{
    return 'You are authenticated and over 200 years old!';
}));
</pre>
