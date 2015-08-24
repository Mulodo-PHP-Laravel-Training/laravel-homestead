<h2>Basic Usage</h2>
<h3>Configuration</h3>
<p>
	All cofiguration is set on
	<code>config/database</code>
</p>
<p>Currently Laravel supports four database systems: MySQL, Postgres,
	SQLite, and SQL Server.</p>
<h3>Read / Write Connections</h3>
<p>We can set different hosts for read and write into database.</p>
<pre>
'mysql' => [
    'read' => [
        'host' => <font color='red'>'192.168.1.1'</font>,
    ],
    'write' => [
        'host' => <font color='red'>'196.168.1.2'</font>
    ],
    'driver'    => 'mysql',
    'database'  => 'database',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
],
</pre>
<hr>
<h3>Listening For Query Events</h3>
<p>
	If you would like to receive each SQL query executed by your
	application, you may use the
	<code>listen</code>
	method. This method is useful for
	<code>logging queries or debugging</code>
	. You may register your query listener in a service provider:
</p>
<pre>
// app/Providers/AppServiceProvider.php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DB::listen(function($sql, $bindings, $time) {
        	echo "Service Provider: process to write logs or debug queries.";
            // process to write logs or debug queries.
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
</pre>
<p>Clicking these examples below for previewing</p>
<hr>
<h3>Database Transactions</h3>
<h4>Our Transactional Toolset</h4>
<p>Database transactions consist of three possible "tools":</p>
<ul>
<li>Creating a transaction - Letting the database know that next queries on a connection should be considered part of a transaction
<li>Rolling back a transaction - Cancelling all queries within the transaction, ending the transactional state
<li>Committing a transaction - Committing all queries within the transaction, ending the transactional state. No data if affected until the transaction is committed.
</ul>
<!-- 
<pre>
public function sampleSelect11($method = null) {
	DB::transaction ( function () {
		DB::statement('SET autocommit=0;');
		DB::table ( 'users' )->truncate ();
		/*DB::table ( 'users' )->update ( [ 
				'votes' => 1 
		] );*/
		DB::table ( 'users' )->insert ( [ 
				'email' => 'vytien@gmail.com',
				'first_name' => 'default name' 
		] );
	} );
	switch ($method) {
		case "begin" :
			DB::beginTransaction ();
			break;
		case "rollback" :
			DB::beginTransaction ();
			DB::rollBack ();
			//DB::commit ();
			break;
	}
	dd ( DB::getQueryLog () );
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ route('db-sample-11', 'begin') }}" role="button">View
		example 1</a> <a class="btn btn-lg btn-primary"
		href="{{ route('db-sample-11', 'rollback') }}" role="button">View
		example 2</a>
		<a class="btn btn-lg btn-primary"
		href="{{ route('db-sample-11', 'commit') }}" role="button">View
		example 3</a>
</p>
 -->
 <hr>