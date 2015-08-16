<?php

namespace App\Http\Controllers\admin\sample;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

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
			//return "Login successfully";
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
				'password' => $password,
				//'active' => 1 
		] )) {
			//return "Login successfully";
			return redirect ()->intended ( '/administrator' );
		} else {
			return "Login fail!";
		}
	}
	public function rememberLogged($email = null, $password = null) {
		if (Auth::attempt(['email' => $email, 'password' => $password], $remember))
		{
			var_dump($remember);
		}
	}
	/**
	 * Authenticating Users By ID
	 *
	 * @return Response
	 */
	public function loginById($userId = null) {
		if (!is_null($userId)) {
			$rst = Auth::loginUsingId($userId);
			return redirect ()->intended ( '/administrator' );
		}
		else {
			return "Login fail";
		}
	}
}
