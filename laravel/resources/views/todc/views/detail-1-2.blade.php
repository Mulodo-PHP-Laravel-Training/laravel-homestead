<h3>Passing Data To Views</h3>
<p>
	There are many options that you can choose to pass data to views in
	<code>routes.php</code>
</p>
<pre>
return view('greetings', ['name' => 'Tien Nguyen']);
return view('greeting')->with('name', 'Anna Nguyen');
</pre>
