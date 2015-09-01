<h2 id="vt1-4">Request Lifecycle</h2>
<p>When using any tool in the "real world", you feel more confident if
	you understand how that tool works. Application development is no
	different. When you understand how your development tools function, you
	feel more comfortable and confident using them. Click <a href="http://laravel-recipes.com/recipes/52/understanding-the-request-lifecycle" target="_blank">here</a> to view more detail.</p>
<!--div class="row">
	<div id="carousel-example-generic" class="carousel slide"
		data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0"
				class=""></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"
				class=""></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"
				class="active"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item">
				<img data-src="img/MVC-pattern-01.png"
					alt="MVC login example"
					src="img/MVC-pattern-01.png"
					data-holder-rendered="true" height="675">
			</div>
			<div class="item active">
				<img data-src="img/laravel-DB-operations-01.png"
					alt="Database operations"
					src="img/laravel-DB-operations-01.png"
					data-holder-rendered="true"  height="675">
			</div>
			<div class="item active">
				<img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide"
					alt="Third slide [1140x500]"
					src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTE0MCIgaGVpZ2h0PSI1MDAiIHZpZXdCb3g9IjAgMCAxMTQwIDUwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvMTE0MHg1MDAvYXV0by8jNTU1OiMzMzMvdGV4dDpUaGlyZCBzbGlkZQpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE0ZjI5YzkyZDVjIHRleHQgeyBmaWxsOiMzMzM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NTdwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTRmMjljOTJkNWMiPjxyZWN0IHdpZHRoPSIxMTQwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSIvPjxnPjx0ZXh0IHg9IjM3Ny44NTkzNzUiIHk9IjI3NS41Ij5UaGlyZCBzbGlkZTwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="
					data-holder-rendered="true"  height="675">
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-example-generic"
			role="button" data-slide="prev"> <span class="icon-prev"
			aria-hidden="true"></span> <span class="sr-only">Previous</span>
		</a> <a class="right carousel-control"
			href="#carousel-example-generic" role="button" data-slide="next"> <span
			class="icon-next" aria-hidden="true"></span> <span class="sr-only">Next</span>
		</a>
	</div>
</div-->
<hr>
<div class="row">
	<div class="col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					Index page -
					<code>public/index.php</code>
				</h3>
			</div>
			<div class="panel-body">
				<ul>
					<li>loads the Composer generated autoloader definition
					
					<li>retrieves an instance of the Laravel application from <code>bootstrap/app.php</code>
				
				</ul>
			</div>
			<div class="panel-footer">Panel footer</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Kernel file -
					<code>app/Http/Kernel.php</code>
				</h3>
			</div>
			<div class="panel-body">
				<ul>
					<li>defines an array of <code>bootstrappers</code> that will be run
						before the request is executed.
					
					<li>These <code>bootstrappers</code> configure:
						<ul>
							<li>error handling
							
							<li>configure logging
							
							<li>detect the application environment
							
							<li>perform other tasks that need to be done before the request
								is actually handled
						
						</ul>
					</li>
					<li>defines a list of <code>HTTP middleware</code> that all
						requests must pass through before being handled by the
						application.
					
					<li>The method signature for the HTTP kernel's handle method is
						quite simple: <code>receive a Request and return a Response</code>
				
				</ul>
			</div>
			<div class="panel-footer">Panel footer</div>
		</div>
	</div>
	<!-- /.col-sm-4 -->
	<div class="col-sm-4">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">
					App file -
					<code>config/app.php</code>
				</h3>
			</div>
			<div class="panel-body">
				<ul>
					<li>configure all of the service providers for the application in
						array <code>providers</code>
				
				</ul>
			</div>
			<div class="panel-footer">Panel footer</div>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">
					Service Providers -
					<code>app/Providers</code>
				</h3>
			</div>
			<div class="panel-body">
				<ul>
					<li>Process of service providers
						<ul>
							<li>First, the <code>register</code> method will be called on all
								providers,
							
							<li>Then, once all providers have been registered, the <code>boot</code>
								method will be called.
						
						</ul>
					</li>
					<li>By default, the <code>AppServiceProvider</code> is fairly
						empty. This provider is a great place to add your application's
						own bootstrapping and service container bindings. Of course, for
						large applications, you may wish to create several service
						providers, each with a more granular type of bootstrapping.
				
				</ul>
			</div>
			<div class="panel-footer">Panel footer</div>
		</div>
	</div>
	<!-- /.col-sm-4 -->
	<div class="col-sm-4">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">
					Environment -
					<code>.env</code>
				</h3>
			</div>
			<div class="panel-body">
				<ul>
					<li>configure all general settings
					
					<li>can add your own settings and retrieve them by using
						<ul>
							<li><code>env($key, $default_value)</code>
								<p>example: env('DB_DATABASE')</p>
							
							<li><code>getenv($key)</code>
								<p>example: getenv('DB_USERNAME')</p>
						
						</ul>
					</li>
					<li>If you want to ensure all the required variables are set up
						front, rather than waiting for the app to break when it accesses
						them?
						<uL>
							<li>check only 1 key <code>Dotenv::required($key)</code>
								<p>example: Dotenv::required('DB_USERNAME')</p>
							
							<li>check multi keys <code>Dotenv::required([$key1,$key2,$key3])</code>
								<p>example:
									Dotenv::required(['DB_USERNAME','DB_HOST','DB_PASSWORD'])</p>
						
						</uL>
					</li>
				</ul>
			</div>
			<div class="panel-footer">Panel footer</div>
		</div>
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">Database - <code>config/database.php</code></h3>
			</div>
			<div class="panel-body">
				<ul>
					<li>define all of your database connections, as well as specify which connection should be used by default.
					<li>currently Laravel supports four database systems: MySQL, Postgres, SQLite, and SQL Server.
				</ul>
			</div>
			<div class="panel-footer">Panel footer</div>
		</div>
	</div>
	<!-- /.col-sm-4 -->
</div>
