<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear table
		User::truncate ();
		// add 1st row
		User::create ( [
				'first_name' => 'Anna',
				'last_name' => 'Nguyen',
				'email' => 'tien.nguyen@mulodo.com',
				'password' => '$2y$10$qQdDaXWbo4itF/B12I7KgOIkLBgMuA9O3xup1VoN1vwv69YF2P1Ga'
		] );
		User::create ( [
				'first_name' => 'Tien',
				'last_name' => 'Nguyen',
				'email' => 'vytien@gmail.com',
				'password' => '$2y$10$qQdDaXWbo4itF/B12I7KgOIkLBgMuA9O3xup1VoN1vwv69YF2P1Ga'
		] );
		User::create ( [
				'first_name' => 'John',
				'last_name' => 'Ngo',
				'email' => 'john@gmail.com',
				'password' => '$2y$10$qQdDaXWbo4itF/B12I7KgOIkLBgMuA9O3xup1VoN1vwv69YF2P1Ga'
		] );
		User::create ( [
				'first_name' => 'Tom',
				'last_name' => 'Smith',
				'email' => 'tom@gmail.com',
				'password' => '$2y$10$qQdDaXWbo4itF/B12I7KgOIkLBgMuA9O3xup1VoN1vwv69YF2P1Ga'
		] );
    }
}
