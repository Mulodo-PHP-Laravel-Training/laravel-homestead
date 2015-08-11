<?php
use Illuminate\Database\Seeder;
use App\sliders;
class SlidersSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		// clear table
		sliders::truncate ();
		// add 1st row
		sliders::create ( [ 
				'title' => 'Slider 1',
				'image' => 'vt-1438854983.png',
				'description' => 'Slider 1' 
		] );
		// add 2nd row
		sliders::create ( [ 
				'title' => 'Slider 2',
				'image' => 'vt-1438855001.png',
				'description' => 'Slider 2' 
		] );
		// add more rows
		sliders::create ( [
				'title' => 'Slider 3',
				'image' => 'vt-1438855013.png',
				'description' => 'Slider 3'
		] );
		sliders::create ( [
				'title' => 'Slider 4',
				'image' => 'vt-1438855025.png',
				'description' => 'Slider 4'
		] );
		sliders::create ( [
				'title' => 'Slider 5',
				'image' => 'vt-1438855042.png',
				'description' => 'Slider 5'
		] );
	}
}
