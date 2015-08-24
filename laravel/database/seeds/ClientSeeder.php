<?php
use Illuminate\Database\Seeder;
use App\Client;
class ClientSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		// add 1st row
		Client::create ( [ 
				'name' => 'Client 1',
				'email' => 'client@gmail.com' 
		] );
		// add 2nd row
		Client::create ( [ 
				'name' => 'Client 2',
				'email' => 'lala@gmail.com' 
		] );
		// add more rows
		Client::create ( [ 
				'name' => 'Client 3',
				'email' => 'mama@gmail.com' 
		] );
	}
}
