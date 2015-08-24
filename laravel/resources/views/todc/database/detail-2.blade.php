<h2>Query Builder</h2>
<table class="table table-bordered table-striped table-hover">
	<colgroup>
		<col class="col-xs-3">
		<col class="col-xs-9">
	</colgroup>
	<thead>
	</thead>
	<tbody>
		<tr>
			<td>Title</td>
			<td>Format</td>
		</tr>
		<tr>
			<td>Retrieving All Rows From A Table</td>
			<td><code>DB::table('table_name')->get();</code> <pre>
// app/Http/Controllers/admin/sample/DBController.php
public function sampleSelect1($id = 1) {
	$results = DB::table('users')->get();
	dd ( $results );
}
			</pre>
				<p>
					<a class="btn btn-lg btn-primary" href="{{ route('db-sample-1') }}"
						role="button">View example</a>
				</p></td>
		</tr>
		<tr>
			<td>Retrieving A Single Row / Column From A Table</td>
			<td><code>DB::table('table_name')->where('field_name',
					'field_value')->first();</code> <pre>
public function sampleSelect2($id = 1) {
	$results = DB::table('users')->where('id', 1)->first();
	dd ( $results );
}
			</pre>
				<p>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-2', [1]) }}" role="button">View example</a>
				</p> <pre>
public function sampleSelect3($name = null) {
	$results = DB::table('users')->where('first_name', 'Anna')->value('email');
	dd ( $results );
}
				</pre>
				<p>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-3', ['Anna']) }}" role="button">View
						example</a>
				</p></td>
		</tr>
		<tr>
			<td>Chunking Results From A Table</td>
			<td><pre>
public function sampleSelect5() {
	DB::table ( 'users' )->chunk ( 100, function ($users) {
		foreach ( $users as $user ) {
			echo $user->first_name;
			if ($user->email == 'vytien1111@gmail.com') return false;  // using it when you want to stop 
		}
	} );
}
				</pre>
				<p>
					<a class="btn btn-lg btn-primary" href="{{ route('db-sample-5') }}"
						role="button">View example</a>
				</p></td>
		</tr>
		<tr>
			<td>Retrieving A List Of Column Values</td>
			<td><pre>
public function sampleSelect6() {
	$emails = DB::table('users')->lists('email');
	foreach ($emails as $email) {
		echo $email;
	}
}
			</pre>
				<p>
					<a class="btn btn-lg btn-primary" href="{{ route('db-sample-6') }}"
						role="button">View example</a>
				</p></td>
		</tr>
		<tr>
			<td>Aggregates</td>
			<td>
				<p>
					The query builder also provides a variety of aggregate methods,
					such as
					<code>count, max, min, avg, and sum.</code>
				</p> <pre>
public function sampleSelect7($method = 'count') {
	switch ($method) {
		default: 
			$results = DB::table ( 'users' )->count (); // return number
			break;
		case "max" :
			$results = DB::table ( 'users' )->max ( 'id' ); // desc
			break;
		case "min" :
			$results = DB::table ( 'users' )->min ( 'email' ); // asc
			break;
		case "avg" :
			$results = DB::table ( 'users' )->avg ( 'id' ); // return number 0.0
			break;
		case "combine" :
			$results = DB::table ( 'users' )->where ( 'first_name', 'Anna' )->avg ( 'id' );
			break;
	}
	dd ( $results );
}
				</pre>
				<p>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-7', ['count']) }}" role="button">View
						example 1</a> <a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-7', ['max']) }}" role="button">View
						example 2</a> <a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-7', ['min']) }}" role="button">View
						example 3</a> <a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-7', ['avg']) }}" role="button">View
						example 4</a> <a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-7', ['sum']) }}" role="button">View
						example 5</a> <a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-7', ['combine']) }}" role="button">View
						example 6</a>
				</p>
				<h4>
					<span class="label label-danger">Notes</span>
				</h4>
				<ul>
					<li>We can use max and min to get descending/ascending value if
						field has string type
					
					<li>We can combine them with where, see example 6 for more details.




					
				
				</ul>
			</td>
		</tr>
		<tr>
			<td>Specifying A Select Clause</td>
			<td><pre>
public function sampleSelect8($method = null) {
	switch ($method) {
		default:
			$results = DB::table('users')->select('first_name', 'email as user_email')->get();
			break;
		case "distinct":
			$results = DB::table('users')->distinct()->get();
			$results = DB::table('users')->distinct()->lists('id');
			break;
		case "raw": // be careful not to create any SQL injection points
			$results = DB::table('users')
			->select(DB::raw('count(*) as user_count, email'))
			->where('email', '<>', 1)
			->groupBy('email')
			->get();
			break;
	}
	dd ( $results );
}
				</pre>
				<p>
					<a class="btn btn-lg btn-primary" href="{{ route('db-sample-8') }}"
						role="button">View example 1</a> <a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-8', 'distinct') }}" role="button">View
						example 2</a> <a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-8', 'raw') }}" role="button">View
						example 3</a>
				</p></td>
		</tr>
		<tr>
			<td>Where Clauses
				<p>
					You may use a variety of other operators when writing a where
					clause such as
					<code>= <= >= like <></code>
				</p>
				<p>You may chain where constraints together, as well as add or
					clauses to the query.</p>
				<ul>
					<li>orWhere
					
					<li>whereBetween
					
					<li>whereNotBetween
					
					<li>whereIn
					
					<li>whereNotIn
					
					<li>whereNull
					
					<li>whereNotNull
				
				</ul>
			</td>
			<td><pre>
public function sampleSelect9($method = null) {
	switch ($method) {
		default :
			$results = DB::table ( 'users' )->where ( 'id', '=', 1 )->get ();
			// $results = DB::table('users')->where('id', 1)->get();
			break;
		case "or" :
			$results = DB::table ( 'users' )->where ( 'id', 1 )->orWhere ( 'first_name', 'Anna' )->get ();
			break;
		case "between" :
			$results = DB::table ( 'users' )->whereBetween ( 'id', [ 
					1,
					100 
			] )->get ();
			break;
		case "skip-take" :
			$results = DB::table ( 'users' )->skip ( 10 )->take ( 5 )->get ();
			break;
		case "havingRaw" :
			$results = DB::table ( 'users' )->select ( '*', DB::raw ( 'SUM(id) as total_id' ) )->groupBy ( 'first_name' )->havingRaw ( 'SUM(id) > 2' )->get ();
			break;
	}
	dd ( $results );
}
			</pre>
				<p>
					<a class="btn btn-lg btn-primary" href="{{ route('db-sample-9') }}"
						role="button">View example 1</a> <a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-9', 'or') }}" role="button">View example
						2</a> <a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-9', 'between') }}" role="button">View
						example 3</a> <a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-9', 'skip-take') }}" role="button">View
						example 4</a>

				</p>
				<p>
					The
					<code>havingRaw</code>
					method may be used to set a raw string as the value of the
					<code>having</code>
					clause.
				</p>
				<p>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-9', 'havingRaw') }}" role="button">View
						example 5</a>
				</p></td>
		</tr>
		<tr>
			<td>Insert / Update / Delete</td>
			<td><pre>
public function sampleSelect10($method = null) {
	switch ($method) {
		default :
			DB::table ( 'users' )->insert ( [ 
					'email' => 'john' . time () . '@example.com',
					'first_name' => 'default name' 
			] );
			break;
		case "insert_multi_records" :
			DB::table ( 'users' )->insert ( [ 
					[ 
							'email' => 'taylor' . time () . '@example.com',
							'first_name' => 'default name' 
					],
					[ 
							'email' => 'dayle' . time () . '@example.com',
							'first_name' => 'default name' 
					] 
			] );
			break;
		case "insert_get_id" :
			$results = DB::table ( 'users' )->insertGetId ( [ 
					'email' => 'mary' . time () . '@example.com',
					'first_name' => 'default name' 
			] );
			break;
		case "update" :
			DB::table ( 'users' )->where ( 'id', 2 )->update ( [ 
					'email' => 'tien.nguyen' . time () . '@mulodo.com' 
			] );
			break;
		case "increment" :
			DB::table ( 'users' )->increment ( 'votes' );
			// update `users` set `votes` = `votes` + 1
			break;
		case "increment_2" :
			DB::table ( 'users' )->increment ( 'votes', 10 );
			// update `users` set `votes` = `votes` + 10
			break;
		case "decrement" :
			DB::table ( 'users' )->decrement ( 'votes' );
			// update `users` set `votes` = `votes` - 1
			break;
		case "decrement_2" :
			DB::table ( 'users' )->decrement ( 'votes', 10 );
			// update `users` set `votes` = `votes` - 10
			break;
		case "combine" :
			DB::table ( 'users' )->increment ( 'votes', 1, [ 
					'first_name' => 'Anna' 
			] );
			break;
		case "delete" :
			DB::table ( 'users' )->delete ();
			break;
		case "delete_1" :
			DB::table ( 'users' )->where ( 'votes', '<', 100 )->delete ();
			break;
		case "delete_2" :
			DB::table ( 'users' )->truncate ();
			break;
		case "sharedLock":
			DB::table('users')->where('votes', '>', 100)->sharedLock()->get();
			break;
		case "lockForUpdate":
			DB::table('users')->where('votes', '>', 100)->lockForUpdate()->get();
			break;
	}
	dd ( DB::getQueryLog () );
	// dd ( $results );
}
				</pre>
				<h5>Insert / Update</h5><p>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'insert') }}" role="button">View
						example 1</a>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'insert_multi_records') }}" role="button">View
						example 2</a>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'insert_get_id') }}" role="button">View
						example 3</a>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'update') }}" role="button">View
						example 4</a>
				</p>
				<h5>Increment / Decrement</h5><p>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'increment') }}" role="button">View
						example 5</a>
						<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'increment_2') }}" role="button">View
						example 6</a>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'decrement') }}" role="button">View
						example 7</a>
						<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'decrement_2') }}" role="button">View
						example 8</a>
				</p>
				<h5>Combine increment/decrement and additional columns to update during the operation</h5>
				<p>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'combine') }}" role="button">View
						example 9</a>
				</p>
				<h5>Delete</h5>
				<p>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'delete') }}" role="button">View
						example 10</a>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'delete_1') }}" role="button">View
						example 11</a>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'delete_2') }}" role="button">View
						example 12</a>
				</p>
				<h5>Pessimistic Locking</h5>
				<p>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'sharedLock') }}" role="button">View
						example 13</a>
					<a class="btn btn-lg btn-primary"
						href="{{ route('db-sample-10', 'lockForUpdate') }}" role="button">View
						example 14</a>
				</p>
				</td>
		</tr>
	</tbody>
</table>