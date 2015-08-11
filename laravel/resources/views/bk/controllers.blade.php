@extends('master') @section('content')
<!--main-->
<div class="container" id="main">
	<div class="row">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Registering Controllers</h4>
			</div>
			<div class="panel-body">
				<p>
					To create a new controller, use the make:controller Artisan
					command:
					<code>php artisan make:controller UserController</code>
				</p>
				<p>Add your functions into file
					"app/Http/Controllers/UserController.php"</p>
				<hr>
				<h5>Basic controllers</h5>
				<pre>
					namespace App\Http\Controllers;
					
					use App\User;
					use App\Http\Controllers\Controller;
					
					class UserController extends Controller
					{
					    /**
					     * Show the profile for the given user.
					     *
					     * @param  int  $id
					     * @return Response
					     */
					    public function showProfile($id)
					    {
					        return view('user.profile', ['user' => User::findOrFail($id)]);
					    }
					}
				</pre>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Calling controllers in routes.php</h4>
			</div>
			<div class="panel-body">
				<pre>
				// basic controller function
				Route::get ( 'user-profile/{id}', 'UserController@showProfile' );
				
				// Naming Controller Routes
				//Route::get('user-profile/{id}', ['uses' => 'UserController@showProfile', 'as' => 'user-profile']);
			</pre>
				<p>
					<a href="{{ url('user-profile', 12) }}">View user profile</a>
				</p>
				<p>
					<a href="{{ route('user-profile-2', 12) }}">View user profile</a>
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
