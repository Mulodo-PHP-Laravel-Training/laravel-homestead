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
Route::get ( '/', function () {
	return view ( 'welcome' );
} );

//=======================================
// Examples about DI - #1
Route::get ('foo', function (Bread $food) {
	return dd($food->bread);
});

class Food {
	public function getFood() {
		$this->item = "get food";
		return "get food";
	}
}

class Bread {
	public function __construct(Food $food) {
		$this->bread = $food;
	}
	public function getFood () {
		return $this->bread->getFood();
	}
}

//=======================================
// Examples about DI - #2
if (env('APP_ENV') == 'local') {
	app ()->bind ( 'barInterface', 'barSecond' );
} else {
	app ()->bind ( 'barInterface', 'bar' );
}

Route::get('bar', function (barInterface $bar) {
	return dd($bar);
});

interface barInterface {
	public function getStatus();
}

class bar implements barInterface {
	public function getStatus() {
		return "showing status";
	}
}
class barSecond implements barInterface {
	public function getStatus() {
		return "showing status of barSecond";
	}
}