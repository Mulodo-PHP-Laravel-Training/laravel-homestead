<h2>Form Method Spoofing</h2>
<p>HTML forms do not support <code>PUT, PATCH or DELETE</code> actions. So, when
	defining <code>PUT, PATCH or DELETE</code> routes that are called from an HTML form,
	you will need to add a hidden <code>_method</code> field to the form. The value sent
	with the <code>_method</code> field will be used as the HTTP request method:</p>
<pre>
<code>
<form action="/foo/bar" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</code>
</pre>
