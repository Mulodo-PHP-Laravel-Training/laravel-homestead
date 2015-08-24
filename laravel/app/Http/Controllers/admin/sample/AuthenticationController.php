<?php

namespace App\Http\Controllers\admin\sample;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Illuminate\Database\Eloquent\Model;

class AuthenticationController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		//
	}
	
	/**
	 * Manual Authentication
	 *
	 * @return Response
	 */
	public function manualLogging($email = null, $password = null) {
		if (Auth::attempt ( [ 
				'email' => $email,
				'password' => $password 
		] )) {
			// return "Login successfully";
			return redirect ()->intended ( '/administrator' );
		} else {
			return "Login fail!";
		}
	}
	/**
	 * Manual Authentication: checking logged user with active = 1 (this is sample field)
	 *
	 * @return Response
	 */
	public function manualLogging2($email = null, $password = null) {
		if (Auth::attempt ( [ 
				'email' => $email,
				'password' => $password 
		] )) 
		// 'active' => 1
		{
			// return "Login successfully";
			return redirect ()->intended ( '/administrator' );
		} else {
			return "Login fail!";
		}
	}
	public function rememberLogged($email = null, $password = null) {
		if (Auth::attempt ( [ 
				'email' => $email,
				'password' => $password 
		], $remember )) {
			var_dump ( $remember );
		}
	}
	/**
	 * Authenticating Users By ID
	 *
	 * @return Response
	 */
	public function loginById($userId = null) {
		if (! is_null ( $userId )) {
			Auth::loginUsingId ( $userId ); // login system with userId automatically
			return redirect ()->intended ( '/administrator' );
		} else {
			return "Login fail";
		}
	}
	/**
	 * Check user authentication after logging to know if they login successfully or fail.
	 *
	 * @return Response
	 */
	public function checkAuthStatus() {
		if (Auth::check ()) {
			return "Login successfully";
		} else {
			return "Login fail";
		}
	}
	/**
	 * Validating User Credentials Without Login
	 *
	 * @return Response
	 */
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
			// throw new \Exception('Invalid credentials');
		}
	}
	/**
	 * Logging A User In For A Single Request
	 *
	 * @return Response
	 */
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
	/**
	 * Manually Logging In A User
	 *
	 * @return Response
	 */
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
	/**
	 * Logout
	 *
	 * @return Response
	 */
	public function logout() {
		Auth::logout();
		return redirect ()->intended ( '/administrator' );
	}
}
