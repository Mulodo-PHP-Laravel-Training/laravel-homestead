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
<p><a class="btn btn-lg btn-primary"
		href="{{ route('authentication-sample-1') }}" role="button">View
		example</a>
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
		href="{{ route('authentication-sample-2',['vytien1234@gmail.com','111111']) }}" role="button">View
		example</a>
</p>
<h3>Authenticating Users By ID</h3>
<p>To log a user into the application by their ID, use the <code>loginUsingId</code> method:</p>
<pre>
// App\Http\Controllers\admin\sample\AuthenticationController.php
public function loginById($userId = null) {
	if (!is_null($userId)) {
		$rst = Auth::loginUsingId($userId);
		return redirect ()->intended ( '/administrator' );
	}
	else {
		return "Login fail";
	}
}
</pre>
<p><a class="btn btn-lg btn-primary"
		href="{{ route('authentication-sample-3', '1') }}" role="button">View
		example</a>
</p>
<h3>Validating User Credentials Without Login</h3>
http://laravel.com/docs/5.0/authentication