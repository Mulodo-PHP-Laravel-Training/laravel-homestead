<h2>Throwing 404 Errors</h2>
<p>There are two ways to manually trigger a 404 error from a route.
	First, you may use the <code>abort</code> helper. The <code>abort</code> helper simply throws a
	<code>Symfony\Component\HttpFoundation\Exception\HttpException</code> with the
	specified status code:</p>
<pre>
abort(404);
</pre>
<p>Secondly, you may manually throw an instance of</p>
<code>Symfony\Component\HttpKernel\Exception\NotFoundHttpException.</code>
