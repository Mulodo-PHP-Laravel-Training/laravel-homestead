<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class LoginTest extends TestCase {
	public function testUserLogin() {
		$this->visit ( 'auth/login' )->type ( 'tien.nguyen@mulodo.com', 'email' )->type ( 'tien', 'password' )->press ( 'Login' )->seePageIs ( '/home' );
	}
}
