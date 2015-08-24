<h2 id="vt1-1">Authentication</h2>
<h3>Manual Authentication</h3>
<pre>
// App\Http\Controllers\admin\sample\AuthenticationController.php
public function manualLogging($email = null, $password = null) {
	if (Auth::attempt ( [ 
			'email' => $email,
			'password' => $password 
	] )) {
		//return "Login successfully";
		return redirect ()->intended ( 'dashboard' );
	} else {
		return "Login fail!";
	}
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('authentication-sample-1',['vytien@gmail.com','111111']) }}"
		role="button">View example</a>
</p>
<pre>
// App\Http\Controllers\admin\sample\AuthenticationController.php
public function manualLogging2($email = null, $password = null) {
	if (Auth::attempt ( [ 
			'email' => $email,
			'password' => $password,
			//'active' => 1 
	] )) {
		//return "Login successfully";
		return redirect ()->intended ( 'dashboard' );
	} else {
		return "Login fail!";
	}
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('authentication-sample-2',['vytien1234@gmail.com','111111']) }}"
		role="button">View example</a>
</p>
<h3>Authenticating Users By ID</h3>
<p>
	To log a user into the application by their ID, use the
	<code>loginUsingId</code>
	method:
</p>
<pre>
// App\Http\Controllers\admin\sample\AuthenticationController.php
public function loginById($userId = null) {
	if (!is_null($userId)) {
		Auth::loginUsingId($userId);
		return redirect ()->intended ( '/administrator' );
	}
	else {
		return "Login fail";
	}
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('authentication-sample-3', '1') }}" role="button">View
		example</a>
</p>
<h3>Determining If A User Is Authenticated</h3>
<p>
	To determine if the user is already logged into your application, you
	may use the
	<code>check</code>
	method:
</p>
<pre>
// App\Http\Controllers\admin\sample\AuthenticationController.php
public function checkAuthStatus() {
	if (Auth::check ()) {
		return "Login successfully";
	} else {
		return "Login fail";
	}
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('authentication-sample-4') }}" role="button">View
		example</a>
</p>
<h3>Validating User Credentials Without Login</h3>
<p>
	You want to
	<code>validate</code>
	a user's credentials, but you don't want to log the user in.
</p>
<p>
	The method
	<code>takes an array</code>
	containing the user's credentials.
</p>
<pre>
// App\Http\Controllers\admin\sample\AuthenticationController.php
public function validateByCredentials($email = null, $password = null) {
	$credentials = [ 
			'email' => $email,
			'password' => $password 
	];
	$valid = Auth::validate ( $credentials );
	if ($valid) {
		return "Login successfully";
	} else {
		return "Login fail";
	}
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('authentication-sample-5', ['vytien111@gmail.com', '111111']) }}"
		role="button">View example</a>
</p>
<h3>Logging A User In For A Single Request</h3>
<p>
	You may also use the
	<code>once</code>
	method to log a user into the application for a single request. No
	sessions or cookies will be utilized:
</p>
<pre>
// App\Http\Controllers\admin\sample\AuthenticationController.php
public function loginForRequest($email = null, $password = null) {
	$credentials = [
			'email' => $email,
			'password' => $password
	];
	if (Auth::once($credentials))
	{
		return "Login successfully";
	} else {
		return "Login fail";
	}
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('authentication-sample-6', ['vytien111@gmail.com', '111111']) }}"
		role="button">View example</a>
</p>
<h3>Manually Logging In A User</h3>
<p>
	If you need to log an existing user instance into your application, you
	may call the
	<code>login</code>
	method with the user instance:
</p>
<pre>
// App\Http\Controllers\admin\sample\AuthenticationController.php
public function manualLoggingInUser($email = null, $password = null) {
	$user = new User();
	$user->email = $email;
	$user->password = $password;
	if (Auth::login($user)) {
		return "Login successfully";
	}
	else {
		return "Login fail";
	}
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('authentication-sample-7', ['vytien111@gmail.com', '111111']) }}"
		role="button">View example</a>
</p>
<h3>Logging A User Out Of The Application</h3>
<pre>
// App\Http\Controllers\admin\sample\AuthenticationController.php
public function logout() {
	Auth::logout();
	return redirect ()->intended ( '/administrator' );
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('authentication-sample-8') }}" role="button">View
		example</a>
</p>
<hr>
<h3>Social Authentication</h3>
<p>
	In addition to typical, form based authentication, Laravel also
	provides a simple, convenient way to authenticate with OAuth providers
	using
	<code>Laravel Socialite</code>
	. Socialite currently supports authentication with
	<code>Facebook, Twitter, Google, GitHub and Bitbucket.</code>
</p>
<h4>Step by step to install Laravel Socialite</h4>
<ol>
	<li>open file <code>composer.json</code> to add <code>"laravel/socialite":
			"~2.0"</code> <pre>
"require": {
        "laravel/socialite": "~2.0"
    },
</pre>
	</li>
	<li>run <code>composer update</code> to get package from remote
	
	<li>register the <code>Laravel\Socialite\SocialiteServiceProvider</code>
		in your <code>config/app.php</code> configuration file. <pre>
		'providers' => [
    	'Laravel\Socialite\SocialiteServiceProvider',
    ],
		</pre>
		<p>
			Facades :- To register facades go to
			<code>config/app.php</code>
			and add below code to “aliases” array :
		</p> <pre>
'aliases' => [
    	'Socialize' => 'Laravel\Socialite\Facades\Socialite',
    ],
</pre>
	</li>
	<li>add credentials for the OAuth services your application utilizes.
		<p>
			These credentials should be placed in your
			<code>config/services.php</code>
			configuration file, and should use the
			<code>key facebook, twitter, google, or github,</code>
			depending on the providers your application requires.
		</p>
	</li>
</ol>
<p><a href="https://github.com/oriceon/oauth-5-laravel">Reference: oauth 5 laravel</a></p>
<hr>
<h3>
	<span class="label label-primary">Examples</span>
</h3>
<hr>
<h4>
	<span class="label label-danger">Github</span>
</h4>
<ol>
	<li><a href="https://github.com/settings/applications/new"
		target="_blank">Registering your app</a></li>
	<li>open <code>config/services.php</code> then entering your Github App
		<pre>
'github' => [
		'client_id' => '0db4a0a87405e853bccd',
		'client_secret' => '2f9cdc7bbca7a0f42a8520d0acf055402b83216b',
		'redirect' => 'http://homestead.app/',
],
</pre>
	</li>
	<li>Create GithubController.php by typing <code>php artisan
			make:controller admin/sample/GithubController</code> in terminal
	</li>
	<li>There are 2 methods: <code>redirectToProvider</code> and <code>handleProviderCallback</code>
	<pre>
namespace App\Http\Controllers\admin\sample;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    /**
     * Redirecting the user to the OAuth provider
     *
     * @return Response
     */
    public function redirectToProvider()
    {
    	return \Socialize::with('github')->redirect();
    }
    /**
     * Receiving the callback from the provider after authentication
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
    	$user = \Socialize::with('github')->user();
    
    	// $user->token;
    }
}
	</pre>
	</li>
	<li>Create 2 routes to redirect and handle callback <pre>
Route::group ( [ 
		'prefix' => 'socialite',
		'namespace' => 'admin' 
], function () {
	Route::get ( 'github/redirectToProvider', [
			'as' => 'github-redirectToProvider',
			'uses' => 'sample\GithubController@redirectToProvider'
	] );
} );
	</pre>
	</li>
</ol>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('github-redirectToProvider') }}"
		role="button">View example</a>
	<a href="{!!URL::route('github-redirectToProvider')!!}">Login with Github</a>
</p>

