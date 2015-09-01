<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class RegistrationTest extends TestCase {
	public function testNewUserRegistration() {
		$this->visit ( 'auth/register' )->type ( 'Nguyen', 'first_name' )->type ( 'Tien', 'last_name' )->type ( 'nguyen.tien123@mulodo.com', 'email' )->type ( bcrypt('tien'), 'password' )->type ( bcrypt('tien'), 'password_confirmation' )->press ( 'Register' )->seePageIs ( '/auth/register' );
	}
}
