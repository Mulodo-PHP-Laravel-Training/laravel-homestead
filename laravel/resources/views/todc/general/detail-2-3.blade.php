<h3 id="g2-3-1">Connect database</h3>
<ul>
<li>Open Terminal and go to your working folder
<li>Type <code>homestead ssh</code>
</ul>
<hr>
<h3 id="g2-3-3">Create one table</h3>
<ul>
<li>Using <code>cd</code> to go to your virtual folder where contains <code>public folder</code>. Example in here <code>/home/vagrant/Code/laravel</code>
<li>Type <code>php artisan make:migration [table name]</code> to create one table in <code>database/migrations</code>
<pre>php artisan make:migration sliders_table</pre>
</li>
</ul>
<hr>
<h3 id="g2-3-2">Migrate tables</h3>
<ul>
<li>Using <code>cd</code> to go to your virtual folder where contains <code>public folder</code>. Example in here <code>/home/vagrant/Code/laravel</code>
<li>Type <code>php artisan migrate</code> to migrate tables in <code>database/migrations</code>
</ul>
<hr>
<h3 id="g2-3-4">Add sample data into tables</h3>
<ul>
<li>Create a model by typing <code>php artisan make:mode [name.model]</code> and there is a file "app/sliders.php" created.
<pre>php artisan make:mode sliders</pre>
</li>
<li>Create a seed into <code>database/seeds</code> by typing <code>php artisan make:seeder [name.seed]</code>
<pre>php artisan make:seeder SlidersSeeder</pre>
</li>
<li>Add sample into the file <code>database/seeds/SlidersSeeder.php</code>
<pre>
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
</pre>
</li>
<li>Open file <code>database/seeds/DatabaseSeeder.php</code> and add code to run the seed above
<pre>
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(SlidersSeeder::class);

        Model::reguard();
    }
}
</pre>
</li>
<li>Type <code>php artisan db:seed</code> in terminal to insert data into the table</li>
</ul>
<hr>
