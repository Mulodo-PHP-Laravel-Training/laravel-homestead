<?php

namespace App\Http\Controllers\admin\sample;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller {
	/**
	 * Redirecting the user to the OAuth provider
	 *
	 * @return Response
	 */
	public function redirectToProvider() {
		return \Socialize::with ( 'github' )->redirect ();
	}
	/**
	 * Receiving the callback from the provider after authentication
	 *
	 * @return Response
	 */
	public function handleProviderCallback() {
		$user = \Socialize::with ( 'github' )->user ();
		
		// OAuth Two Providers
		$token = $user->token;
		dd ( $token );
		/*
		 * // OAuth One Providers
		 * $token = $user->token;
		 * $tokenSecret = $user->tokenSecret;
		 *
		 * // All Providers
		 * $user->getId();
		 * $user->getNickname();
		 * $user->getName();
		 * $user->getEmail();
		 * $user->getAvatar();
		 */
	}
	// to get authenticate user data
	public function github() {
		$user = Socialize::with ( 'github' )->user ();
		// Do your stuff with user data.
		print_r ( $user );
		die ();
	}
}
