<div class="jumbotron">
	<div class="container">
		<h1>HTTP Middleware</h1>
		<div class="row">
			<div class="col-md-6">
				<p>Middleware is a function with access to the <code>request object (req),
					the response object (res)</code>, and the next middleware in the
					application’s <code>request-response cycle</code>, commonly denoted by a
					variable named next.</p>
				<p>Middleware can:</p>
				<ul>
					<li>Execute any code.
					
					<li>Make changes to the request and the response objects.
					
					<li>End the request-response cycle.
					
					<li>Call the next middleware in the stack.
				
				</ul>
				<p>If the current middleware does not end the request-response
					cycle, it must call <code>next()</code> to pass control to the next middleware,
					otherwise the request will be left hanging.</p>
			</div>
			<div class="col-md-6">
				<img src="{{ url('/img/clack-middleware-2.png') }}">
			</div>
		</div>
		<p>
			<a class="btn btn-primary btn-lg"
				href="http://laravel.com/docs/master/routing#basic-routing"
				role="button">Learn more »</a>
		</p>
	</div>
</div>