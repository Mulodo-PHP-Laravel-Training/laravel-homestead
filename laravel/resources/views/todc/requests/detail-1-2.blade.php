<h3>Basic Request Information</h3>
<h4>Retrieving The Request URI</h4>
<p>The path method returns the request's URI. So, if the incoming
	request is targeted at http://domain.com/foo/bar, the path method will
	return foo/bar:</p>
<pre>
// function in UserController.php
public function getRequestPath(Request $request)
{
	$uri = $request->path();
	return "Request path is <code>{$uri}</code>";
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ url('user9/request-path') }}" role="button">View example</a>
</p>
<p>To get the full URL, not just the path info, you may use the url
	method on the request instance:</p>
<pre>
// function in UserController.php
public function getRequestFullPath(Request $request) {
	$uri = $request->url ();
	return "Request full path is <code>{$uri}</code>";
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ url('user12/request-path') }}" role="button">View example</a>
</p>
<p>
	The
	<code>is</code>
	method allows you to verify that the incoming request URI matches a
	given pattern. You may use the
	<code>*</code>
	character as a wildcard when utilizing this method:
</p>
<pre>
// function in UserController.php
public function getRequestMatch(Request $request) {
	if ($request->is ( 'user10/*' )) {
		return "Request path match with user10";
	} else {
		return "Request path does not match with user10";
	}
}
</pre>
<p>
	<a class="btn btn-lg btn-primary"
		href="{{ url('user10/request-path') }}" role="button">View right
		example</a> <a class="btn btn-lg btn-primary"
		href="{{ url('user11/request-path') }}" role="button">View wrong
		example</a>
</p>
<hr>
<h4>Retrieving The Request Method</h4>
<p>The <code>method method</code> will return the HTTP verb for the request. You may
	also use the <code>isMethod</code> method to verify that the HTTP verb matches a
	given string:</p>
<pre>
public function checkMethod(Request $request) {
	$method = $request->method();
	if ($request->isMethod('post')) {
		return "This is Post method.";
	}
	else {
		return "{$method} method ...";
	}
}
</pre>
<h4><span class="label label-success">View example</span></h4>
<div class="row">
	<div class="col-md-3">
		<!-- open form -->
		{!! Form::open(array('class' => 'form', 'method' => 'post', 'url' =>
		url('user13/113'))) !!} {!! Form::submit('Post', array('class'=>'btn
		btn-lg btn-danger')) !!} {!! Form::close() !!}
		<!-- close form -->
	</div>
	<div class="col-md-3">
		<!-- open form -->
		{!! Form::open(array('class' => 'form', 'method' => 'put', 'url' =>
		url('user13/113'))) !!} {!! Form::submit('Put', array('class'=>'btn
		btn-lg btn-danger')) !!} {!! Form::close() !!}
		<!-- close form -->
	</div>
	<div class="col-md-3">
		<!-- open form -->
		{!! Form::open(array('class' => 'form', 'method' => 'delete', 'url' =>
		url('user13/113'))) !!} {!! Form::submit('Delete', array('class'=>'btn
		btn-lg btn-danger')) !!} {!! Form::close() !!}
		<!-- close form -->
	</div>
	<div class="col-md-3">
		<!-- open form -->
		{!! Form::open(array('class' => 'form', 'method' => 'get', 'url' =>
		url('user13/113'))) !!} {!! Form::submit('Get', array('class'=>'btn
		btn-lg btn-danger')) !!} {!! Form::close() !!}
		<!-- close form -->
	</div>
</div>
