<h2>Displaying Data</h2>
<p>
	You may display data passed to your Blade views by wrapping the
	<code>variable in "curly" braces</code>
	. For example, given the following route:
</p>
<pre>
Route::get('/greeting', function ()    {
    return view('todc.views.samples.sample-1', ['name' => 'Tien Nguyen']);
});
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('/greeting') }}"
		role="button">View example</a>
</p>
<h3>Echoing Data If It Exists</h3>
<pre>
Route::get ( '/greeting-2', function () {
	if (view ()->exists ( 'todc.views.samples.sample-1' )) { // check existed view
		return view ( 'todc.views.samples.sample-1' )->with ( 'name' ); // set variable 'name' is null
	} else {
		return "View cannot find.";
	}
} );
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('/greeting-2') }}"
		role="button">View example</a>
</p>
<h3>Common functions</h3>
<table class="table table-bordered table-striped">
	<colgroup>
		<col class="col-xs-1">
		<col class="col-xs-7">
	</colgroup>
	<thead>
		<tr>
			<th>Function</th>
			<th>Example</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row"><code>time()</code></th>
			<td>The current UNIX timestamp is {{ time() }}</td>
		</tr>
		<tr>
			<th scope="row"><code>date('Y-m-d')</code></th>
			<td>{{ date('Y-m-d') }}</td>
		</tr>
		<tr>
			<th scope="row"><code>timestamp()</code></th>
			<td>comming...</td>
		</tr>
		<tr>
			<th scope="row"><code></code></th>
			<td></td>
		</tr>
	</tbody>
</table>

