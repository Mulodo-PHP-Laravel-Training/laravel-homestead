<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class UserController extends Controller {
	/**
	 * Show the profile for the given user.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function showProfile($id) {
		/*
		 * return view ( 'user.profile', [
		 * 'user' => User::findOrFail ( $id )
		 * ] );
		 */
		return view ( 'user.profile', [ 
				'userid' => $id 
		] );
	}
	/**
	 * Responds to requests to GET /users ==> implicit function
	 */
	public function getIndex() {
		return "getIndex function";
	}
	
	/**
	 * Responds to requests to GET /users/show/1 ==> implicit function
	 */
	public function getShow($id) {
		return "getShow function";
	}
	
	/**
	 * Responds to requests to Post /users/show/1 ==> implicit function
	 */
	public function postShow($id) {
		return "getShow function";
	}
	
	/**
	 * Responds to requests to GET /users/admin-profile ==> implicit function
	 */
	public function getAdminProfile() {
		return "getAdminProfile function";
	}
	
	/**
	 * Update the specified user.
	 *
	 * @param Request $request        	
	 * @param int $id        	
	 * @return Response
	 */
	public function update(Request $request, $id) {
		// return $this->store($request);
		return "UserId {$id} is updated successfullly!";
	}
	/**
	 * Store a new user.
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function store(Request $request) {
		// $name = $request->input('name');
		return "UserId is stored in database.";
	}
	/**
	 * Get request path
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function getRequestPath(Request $request) {
		$uri = $request->path ();
		return "Request path is <code>{$uri}</code>";
	}
	/**
	 * Get request full path
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function getRequestFullPath(Request $request) {
		$uri = $request->url ();
		return "Request full path is <code>{$uri}</code>";
	}
	/**
	 * Get request match
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function getRequestMatch(Request $request) {
		if ($request->is ( 'user10/*' )) {
			return "Request path match with user10";
		} else {
			return "Request path does not match with user10";
		}
	}
	/**
	 * Check method: post, get, put, delete.
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function checkMethod(Request $request) {
		$method = $request->method ();
		if ($request->isMethod ( 'post' )) {
			return "This is Post method.";
		} else {
			return "{$method} method ...";
		}
	}
	/**
	 * Retrive inputs after posting/deleting/putting/getting of HTTP.
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function retriveInputs(Request $request) {
		// var_dump($request);
		if ($request->has ( 'email' )) {
			echo "Name is {$request->input('email')}";
		}
		
		// retrive all inputs from form
		$input = $request->all ();
		
		// Flashing Input To The Session
		$request->flash ();
		return redirect ( 'sample-2' )->withInput (); // sample-2 is route name defined in routes.php
	}
	/**
	 * parse Inputs from form to redirected page.
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function parseInputs(Request $request) {
		return view ( 'todc.views.samples.sample-2' )->with ( 'email', $request->old ( 'email' ) );
	}
	/**
	 * Attaching A New Cookie To A Response
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function createCookie(Request $request) {
		Cookie::make('name', 'value', 'minutes'); // And on the next response the cookie will be added automagically.
	}
	/**
	 * retrive cookie from a request
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function retrieveCookie(Request $request) {
		$value = Cookie::get('name');
		return view ( 'todc.views.samples.sample-1' )->with ( 'name', $value );
	}
	/**
	 * Attaching A New Cookie To A Response
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function attachCookieToResponse(Response $response) {
		$response = new Illuminate\Http\Response ( 'Hello World' );
		$response->withCookie ( cookie ( 'name', 'value', 300 ) );
		var_dump($response);
	}
}
