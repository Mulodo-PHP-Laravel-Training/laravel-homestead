<h2>Eloquent ORM</h2>
<p>The Eloquent ORM included with Laravel provides a beautiful, simple
	ActiveRecord implementation for working with your database. Each
	database table has a corresponding "Model" which is used to interact
	with that table. Models allow you to query for data in your tables, as
	well as insert new records into the table.</p>
<h3>Defining Models</h3>
<p>
	Create a model instance is using the
	<code>make:model</code>
	Artisan command
</p>
<ul>
	<li>php artisan make:model <code>model_name</code></li>
	<li>generate a database migration when you generate the model
		<ul>
			<li>php artisan make:model <code>model_name</code> --migration
			
			<li>php artisan make:model <code>model_name</code> -m
		
		</ul>
	</li>
</ul>
<p>
	Default folder that your models created is
	<code>app</code>
</p>
<h4 class="label label-primary">Example</h4>
<pre>
php artisan make:model MyDbModel
Model created successfully.
</pre>
<h4 class="label label-primary">Example</h4>
<pre>
php artisan make:model Client -m
Model created successfully.
Created Migration: 2015_08_19_070220_create_clients_table
</pre>
<h3>Retrieving Multiple Models</h3>
<p>After creating models, you need to set some configurations within the
	files as example below</p>
<h4 class="label label-primary">Example</h4>
<pre>
// app/Client.php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	// The table associated with the model.
    protected $table = 'clients';
    
    // Indicates if the model should be timestamped.
    public $timestamps = false;
    
    // The storage format of the model's date columns.
    protected $dateFormat = 'U';
}
</pre>
<pre>
// database/migrations/2015_08_19_070220_create_clients_table.php
public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });
    }
</pre>
<pre>
// app/Http/Controllers/admin/sample/ClientController.php
namespace App\Http\Controllers\admin\sample;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
   public function index($param = null) {
		switch ($param) {
			default :
				$clients = Client::all ();
				break;
			case "list_where" :
				$clients = Client::where ( 'id', '>', 1 )->orderBy ( 'name', 'desc' )->take ( 10 )->get ();
				break;
			case "find" :
				$clients = Client::find ( 1 );
				break;
			case "first" :
				$clients = Client::where ( 'id', '>', 1 )->first ();
				break;
			case "findOrFail" :
				try {
					$clients = Client::findOrFail ( 100 );
				} catch ( ModelNotFoundException $e ) {
					// dd ( get_class_methods ( $e ) ); // lists all available methods for exception object
					return view ( 'errors.405' )->with ( 'error_message', $e->getMessage () );
				}
				break;
			case "firstOrFail" :
				try {
					$clients = Client::where ( 'id', '>', 100 )->firstOrFail ();
				} catch ( ModelNotFoundException $e ) {
					return view ( 'errors.405' )->with ( 'error_message', $e->getMessage () );
				}
				break;
			case "count" :
				$clients = Client::where ( 'id', '>', 1 )->count ();
				break;
			case "max" :
				$clients = Client::where ( 'id', '>', 1 )->max ( 'id' );
				break;
		}
		
		if (is_array ( $clients )) {
			return view ( 'todc.examples.client_list' )->with ( 'clients', $clients );
		}
		else if (is_numeric($clients)) {
			return $clients;
		}
		return view ( 'todc.examples.client_detail' )->with ( 'client', $clients );
	}
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('eloquent-samples','list') }}" role="button">View
		example 1</a> <a class="btn btn-lg btn-primary"
		href="{{ route('eloquent-samples','list_where') }}" role="button">View
		example 2</a>
</p>
<h3>Retrieving Single Models / Aggregates</h3>
<p>
	Of course, in addition to retrieving all of the records for a given
	table, you may also retrieve single records using
	<code>find and first</code>
	. Instead of returning a collection of models, these methods return a
	single model instance:
</p>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('eloquent-samples','find') }}" role="button">View
		example 3</a> <a class="btn btn-lg btn-primary"
		href="{{ route('eloquent-samples','first') }}" role="button">View
		example 4</a>
</p>
<p>
	The
	<code>findOrFail and firstOrFail</code>
	methods will retrieve the first result of the query. However, if no
	result is found, a
	<code>Illuminate\Database\Eloquent\ModelNotFoundException</code>
	will be thrown
</p>
<p>These examples below will be generated error page.</p>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('eloquent-samples','findOrFail') }}" role="button">View
		example 5</a> <a class="btn btn-lg btn-primary"
		href="{{ route('eloquent-samples','firstOrFail') }}" role="button">View
		example 6</a>
</p>
<p>
	Retrieving Aggregates: we can use
	<code>count, max, min, avg, and sum.</code>
</p>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('eloquent-samples','count') }}" role="button">View
		example 7</a> <a class="btn btn-lg btn-primary"
		href="{{ route('eloquent-samples','max') }}" role="button">View
		example 8</a>
</p>
<h3>Inserting & Updating Models</h3>
<p>
	They are used similar with
	<code>Select</code>
	Models
</p>
<h3>Laravel model</h3>
<table class="table table-bordered table-striped table-hover">
	<colgroup>
		<col class="col-xs-3">
		<col class="col-xs-3">
		<col class="col-xs-6">
	</colgroup>
	<thead>
		<tr>
			<th>Title</th>
			<th>Meaning</th>
			<th>Using</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>ClassName</td>
			<td>Singular of table name</td>
			<td>protected $table = ‘custom_name’</td>
		</tr>
		<tr>
			<td>Primary key</td>
			<td>id</td>
			<td>protected $primaryKey</td>
		</tr>
		<tr>
			<td>Timestamp</td>
			<td>created_at, updated_at</td>
			<td>protected $timestamp = [false/true]
			<p>If you don't want to use default timestamp, you have to set false for this variable. </p>
			</td>
		</tr>
		<tr>
			<td>Guarded</td>
			<td>array of fields name</td>
			<td>protected $guarded = array('id', 'password')</td>
		</tr>
		<tr>
			<td>Fillable</td>
			<td>Fillable</td>
			<td>protected $fillable = array('id', 'password')</td>
		</tr>
	</tbody>
</table>
<p><img src="img/db-relationship.png"></p>