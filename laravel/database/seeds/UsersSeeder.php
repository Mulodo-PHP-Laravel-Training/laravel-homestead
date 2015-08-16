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
				'last_name' => 'Anna',
				'email' => 'tien.nguyen@mulodo.com',
				'password' => '$2y$10$qQdDaXWbo4itF/B12I7KgOIkLBgMuA9O3xup1VoN1vwv69YF2P1Ga'
		] );
    }
}
