<h2 id="vt1-3">Facades: Enable you to hide complex interfacec behind a
	simple one.</h2>
<p>What do they look like?</p>
<h3>
	<span class="label label-success">Facade::doSomethingCool()</span>
</h3>
<p>What are they?</p>
<ul>
	<li>Facede are static wrappers to instatiated objects.
	
	<li>Look like static resources, but actually uses services underneath
	
	<li>Can be mocked for testing (at least with Mockery)
	
	<li>You can easly create your own facades or ‘rewire’ the existing one.




	

</ul>
<p>What Really Happening?</p>
<pre>
// This Command
Route::get(‘/’,’HomeController@getIndex’);

// Is doing this.
$app->make(‘router’)->get(‘HomeController@getIndex’);

// This Command
Input::get(‘email’);

// Is doing this.
$app->make(‘request’)->get(‘email’);

// This Command
$appName = Config::get(‘application.name’);

// Is doing this.
$fileSystem = new Filesystem(...);
$fileLoader = new Fileloader($fileSystem);
$config = new Config($fileLoader,’dev’);
$appName = $config->get(‘application.name’);

</pre>
<p>In the context of a Laravel application, a facade is a class that
	provides access to an object from the container. </p>
<h3>IoC Container + Facades = Laravel</h3>
<ul>
	<li>The static classess used to control Laravel are known as <code>Facades.</code>
	
	<li>Facades are nothing more than wrappers to the IoC Container
	
	<li>Therefore, every time you use facades such as DB, Config, View,
		Route, Etc you are create and/or fetching a pre-registered object!
	
	<li>You can easily create your own application-specific IoC bindings
		and facades

</ul>
<h3>
	<a href="http://laravel.com/docs/5.0/facades#facade-class-reference"
		target="_blank">Facade Class Reference</a>
</h3>
<h4 id="vt1-3-1">Example: Using Laravel 5's Authentication Facade</h4>
<h4>
	<span class="label label-success">Step 1: create table</span>
</h4>
<pre>php artisan make:migration alter_users_table_remove_name_add_first_name_last_name</pre>
<h4>
	<span class="label label-primary">Result</span>
</h4>
<pre>
Randy:laravel user$ php artisan make:migration alter_users_table_remove_name_add_first_name_last_name
Created Migration: 2015_08_13_102308_alter_users_table_remove_name_add_first_name_last_name
</pre>
<h4>
	<span class="label label-success">Step 2: modify columns in <code>users
			table</code> <code>database/2015_08_13_102308_alter_users_table_remove_name_add_first_name_last_name.php</code></span>
</h4>
<pre>
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableRemoveNameAddFirstNameLastName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table){
            $table->dropColumn('name'); // delete default field named "name"
            $table->string('first_name', 50)->after('id'); // add new field
            $table->string('last_name', 50)->after('first_name'); // add new field
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table){
            $table->dropColumn('last_name'); // remove new field
            $table->dropColumn('first_name'); // remove new field
            $table->string('name')->after('id'); // reverse default field for user table (default table)
        });
    }
}
</pre>
<h4>
	<span class="label label-success">Step 3: migrate table</span>
</h4>
<pre>php artisan migrate</pre>
<h4>
	<span class="label label-primary">Result</span>
</h4>
<pre>
vagrant@homestead:~/Code/laravel$ php artisan migrate
Migrated: 2015_08_13_102308_alter_users_table_remove_name_add_first_name_last_name
</pre>
<h4>
	<span class="label label-success">Step 4: open <code>app/Http/Controllers/AuthController.php</code>
		to modify 2 functions as example below:
	</span>
</h4>
<pre>
protected function validator(array $data)
    {
        return Validator::make($data, [
            //'name' => 'required|max:255',
        	'first_name' => 'required|min:3|max:50',
        	'last_name' => 'required|min:3|max:50',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            //'name' => $data['name'],
        	'first_name' => $data['first_name'],
        	'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
</pre>
<h4>
	<span class="label label-success">Step 5: open <code>app/User.php</code>
		to update <code>$fillable</code> of User model:
	</span>
</h4>
<pre>
protected $fillable = ['first_name', 'last_name', 'email', 'password'];
</pre>
<h4>
	<span class="label label-success">Step 6: open <code>resources/views/auth/register.blade.php</code>
		to remove old name and add 2 textboxes for first name and last name as
		below:
	</span>
</h4>
<pre>
<div class="form-group">
	<label class="col-md-4 control-label">First Name</label>
	<div class="col-md-6">
		<input type="text" class="form-control" name="first_name"
				value="{{ old('first_name') }}">
	</div>
</div>
<div class="form-group">
	<label class="col-md-4 control-label">Last Name</label>
	<div class="col-md-6">
		<input type="text" class="form-control" name="last_name"
				value="{{ old('last_name') }}">
	</div>
</div>
</pre>
<h4>
	<span class="label label-success">Step 7: open <code>resources/views/app.blade.php</code>
		to modify:
	</span>
</h4>
<pre>Auth::user()->first_name</pre>