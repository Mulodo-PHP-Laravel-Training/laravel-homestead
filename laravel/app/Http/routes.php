<?php
/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */

// Simple route
/*
 * Route::get ( '/company', function () {
 * return view ( 'mulodo.homepage' );
 * } );
 *
 * //=================================================================================================
 *
 */
/*
 * SAMPLE WEBSITES
 */
// Mulodo Company Site without connecting database
Route::resource ( 'company', 'MulodoController' );

// Admin system
Route::group ( [ 
		'middleware' => 'auth' 
], function () {
	Route::group ( [ 
			'prefix' => 'administrator',
			'namespace' => 'admin'
	], function () {
		Route::resource ( 'sliders', 'SliderController' );
		Route::get ( 'sliders/edit/{id}', 'SliderController@edit' );
		Route::any ( 'sliders', 'SliderController@store' );
	} );
	
	// general admin
	Route::resource ( 'administrator', 'MulodoAdminController' );
} );

// Mulodo Company Site connecting database and retrieving data.
// =================================================================================================

// I need to research to clear cache in Homestead because of Bootstrap Google Plus Theme

// Basic Routing
Route::get ( 'routing', [ 
		'as' => 'routing',
		function () {
			// abort(404, "404 Not Found");
			return view ( "todc.routing" );
		} 
] );
Route::post ( 'foo/bar', function () {
	return 'Post data';
} );

Route::put ( 'foo/bar', function () {
	return 'Put data';
} );

Route::delete ( 'foo/bar', function () {
	return 'Delete data';
} );

// Registering A Route For Multiple Verbs
Route::match ( [ 
		'get',
		'post' 
], '/routing-submit', function () {
	return 'Registering A Route For Multiple Verbs such as: get and post.';
} );

// Register a route that responds to all HTTP verbs
Route::any ( 'foo', function () {
	return 'Register a route that responds to all HTTP verbs such as: post, delete, put, delete';
} );

// Route Parameters
Route::get ( 'user/{id}', function ($id) {
	return 'UserId ' . $id;
} );

Route::get ( 'posts/{post}/comments/{comment}', [ 
		'as' => 'comment-post',
		function ($postId, $commentId) {
			return 'Post ' . $postId . ' for comment ' . $commentId;
		} 
] );

// Optional Parameters
Route::get ( 'user1/{name?}', function ($name = null) {
	return "Username 1: " . $name;
} );

Route::get ( 'user2/{name?}', function ($name = 'John') {
	return "Username 2: " . $name;
} );

// Regular Expression Constraints => if parameters are wrong condition, user will be redirected error system. So to avoid this we should write catch error.
Route::get ( 'user3/{name}', function ($name) {
	return "Username 3: " . $name;
} )->where ( 'name', '[A-Za-z]+' );

Route::get ( 'user4/{id}', function ($id) {
	return "Username 4: " . $id;
} )->where ( 'id', '[0-9]+' );

Route::get ( 'user5/{id}/{name}', function ($id, $name) {
	return "Username 5: " . $name;
} )->where ( [ 
		'id' => '[0-9]+',
		'name' => '[a-z]+' 
] );

// Global Constraints + Route group and name routes --- researching later

// Named Routes
Route::get ( 'user6/profile', [ 
		'as' => 'profile',
		function () {
			return "User profile";
		} 
] );
// echo route('profile');
Route::get ( 'user7/profile/{id}', [ 
		'as' => 'profile-2',
		'uses' => 'UserController@showProfile' 
] );

// Generating URLs To Named Routes and redirecting
$redirect = redirect ()->route ( 'profile' );
// echo $redirect; // open this line if you want to redirect to http://domain.com/user/profile

Route::group ( [ 
		'as' => 'admin::' 
], function () {
	Route::get ( 'dashboard', [ 
			'as' => 'dashboard',
			function () {
				return "Route named admin::dashboard";
			} 
	] );
	Route::get ( 'dashboard', [ 
			'as' => 'orders',
			function () {
				return "Route named admin::orders";
			} 
	] );
} );

Route::get ( 'user/{id}/profile', [ 
		'as' => 'profile-3',
		function ($id) {
			return "User profile 3";
		} 
] );
// $url = route('profile-3', ['id' => 1]);

// Route groups & middleware - http://homestead.app/auth/login
// After logging in the system, these functions below will be run and they can be overwritten these routes above.
Route::group ( [ 
		'middleware' => 'auth' 
], function () {
	Route::get ( '/', function () {
		return "Uses Auth Middleware";
	} );
	
	Route::get ( 'user/profile', function () {
		return "Uses Auth Middleware";
	} );
} );

// Namespaces & Groups
// namespace that comes after the base App\Http\Controllers namespace root
Route::group ( [ 
		'namespace' => 'Admin' 
], function () {
	// Controllers Within The "App\Http\Controllers\Admin" Namespace
	
	Route::group ( [ 
			'namespace' => 'User' 
	], function () {
		// Controllers Within The "App\Http\Controllers\Admin\User" Namespace
	} );
} );

// Sub-Domain Routing http://vytien.homestead.app/
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

// Route Prefixes
Route::group ( [ 
		'prefix' => 'admin' 
], function () {
	Route::get ( 'users', [ 
			"as" => "admin-users",
			function () {
				// Matches The "/admin/users" URL
				return "admin/user";
			} 
	] );
	
	Route::get ( 'customers', [ 
			"as" => "admin-customers",
			function () {
				// Matches The "/admin/customers" URL
				return "admin/customers";
			} 
	] );
	
	Route::get ( 'orders', [ 
			"as" => "admin-orders",
			function () {
				// Matches The "/admin/orders" URL
				return "admin/orders";
			} 
	] );
} );

// Route Prefixes: prefix parameter to specify common parameters
Route::group ( [ 
		'prefix' => 'accounts/{account_id}' 
], function () {
	Route::get ( 'detail', [ 
			"as" => "admin-user-profile",
			function ($account_id) {
				return "Matches The accounts/" . $account_id . "/detail URL";
			} 
	] );
} );

// Secure routes
Route::get ( 'secret/content', array (
		'https',
		function () {
			return 'Secret squirrel!';
		} 
) );
// =================================================================================================
// Middleware
Route::get ( 'middleware', [ 
		'as' => 'middleware',
		function () {
			return view ( "todc.middleware" );
		} 
] );

Route::get ( 'admin/profile', [ 
		'middleware' => 'auth',
		function () {
			//
		} 
] );

/*
 * The route will only run when there is controller having function hasRole() within it.
 * Step by step to create:
 * php artisan make:middleware RoleMiddleware
 * Add "'role' => \App\Http\Middleware\RoleMiddleware::class," into app/Http/Kernel.php
 * Open "RoleMiddleware.php" to write functions and settings
 * Route::get ( 'post/{id}', [
 * 'middleware' => 'role:editor',
 * function ($id) {
 * return "Role:editor";
 * }
 * ] );
 */

// =================================================================================================
// HTTP Controllers
Route::get ( 'controllers', [ 
		'as' => 'controllers',
		function () {
			return view ( "todc.controllers" );
		} 
] );

// basic controller function
// Route::get ( 'user-profile/{id}', 'UserController@showProfile' );

// Naming Controller Routes
Route::get ( 'user-profile/{id}', [ 
		'uses' => 'UserController@showProfile',
		'as' => 'user-profile-2' 
] );

// define routes to access PhotoController
Route::resource ( 'photo', 'PhotoController' );

// Supplementing Resource Controllers
Route::get ( 'photos/popular', 'PhotoController@popular' );

// Nested Resources
Route::resource ( 'photos.comments', 'PhotoCommentController' );

// Accessing Implicit Controllers
Route::controller ( 'users', 'UserController' );
// =================================================================================================
// HTTP Requests
Route::get ( 'requests', [ 
		'as' => 'requests',
		function () {
			// create cookie ==> need to research more
			Cookie::make ( 'name', 'value', 'Anna' ); // And on the next response the cookie will be added automagically.
			
			return view ( "todc.requests" );
		} 
] );

Route::put ( 'user8/{id}', 'UserController@update' );
Route::post ( 'user8/{id}', 'UserController@update' );
Route::delete ( 'user8/{id}', 'UserController@update' );
Route::get ( 'user8/{id}', 'UserController@update' );

Route::get ( 'user9/request-path', 'UserController@getRequestPath' );

Route::resource ( 'user10', 'UserController@getRequestMatch' );
Route::resource ( 'user11', 'UserController@getRequestMatch' );

Route::get ( 'user12/request-path', 'UserController@getRequestFullPath' );

Route::resource ( 'user13', 'UserController@checkMethod' );
Route::post ( 'user13', 'UserController@retriveInputs' );

Route::get ( '/sample-2', [ 
		'as' => 'sample-2',
		'uses' => 'UserController@parseInputs' 
] );

// retrive cookie ==> research
Route::post ( '/retrieve-cookie', 'UserController@retrieveCookie' );
// researching about calling response and cookie in Controllers
// Route::get('/cookie-response', 'UserController@attachCookieToResponse');
// =================================================================================================
// HTTP Responses
Route::get ( 'responses', [ 
		'as' => 'responses',
		function () {
			return view ( "todc.responses" );
		} 
] );

// =================================================================================================
// Views
Route::get ( 'views', [ 
		'as' => 'views',
		function () {
			return view ( "todc.views" );
		} 
] );

// sample-1
Route::get ( '/greeting', function () {
	if (view ()->exists ( 'todc.views.samples.sample-1' )) { // check existed view
	                                                         // return view('todc.views.samples.sample-1', ['name' => 'Tien Nguyen']);
		return view ( 'todc.views.samples.sample-1' )->with ( 'name', 'Tien Nguyen' );
	} else {
		return "View cannot find.";
	}
} );

Route::get ( '/greeting-2', function () {
	if (view ()->exists ( 'todc.views.samples.sample-1' )) { // check existed view
		return view ( 'todc.views.samples.sample-1' )->with ( 'name' ); // set variable 'name' is null
	} else {
		return "View cannot find.";
	}
} );
// =================================================================================================
// Blade templates
Route::get ( 'blade', [ 
		'as' => 'blade',
		function () {
			return view ( "todc.blade" );
		} 
] );

// =================================================================================================
// General
Route::get ( 'general', [ 
		'as' => 'general',
		function () {
			return view ( "todc.general" );
		} 
] );

// =================================================================================================
// Cheat Sheets
Route::get ( 'cheatsheets', [
		'as' => 'cheatsheets',
		function () {
			return view ( "todc.cheatsheets" );
		}
] );

// =================================================================================================
// Models
Route::get ( 'models', [ 
		'as' => 'models',
		function () {
			return view ( "todc.models" );
		} 
] );

// =================================================================================================
