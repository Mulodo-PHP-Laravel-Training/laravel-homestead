<h2 id="g0">Overview</h2>
<p><img src="img/overview-diagram.png"></p>
<h3>RESTful Routing</h3>
<p>Use simple Closures to respond to requests to your application. It
	couldn't be easier to get started building amazing applications.</p>
<h3>Command Your Data</h3>
<p>Ships with the amazing Eloquent ORM and a great migration system.
	Works great on MySQL, Postgres, SQL Server, and SQLite.</p>
<h3>Beautiful Templating</h3>
<p>Use native PHP or the light-weight Blade templating engine. Blade
	provides great template inheritance and is blazing fast. You'll love
	it.</p>
<h3>Ready For Tomorrow</h3>
<p>Build huge enterprise applications, or simple JSON APIs. Write
	powerful controllers, or slim RESTful routes. Laravel is perfect for
	jobs of all sizes.</p>
<h3>Proven Foundation</h3>
<p>Laravel is built on top of several Symfony components, giving your
	application a great foundation of well-tested and reliable code.</p>
<h3>Composer Powered</h3>
<p>Composer is an amazing tool to manage your application's third-party
	packages. Find packages on Packagist and use them in seconds.</p>
<h3>Great Community</h3>
<p>Whether you're a PHP beginner or architecture astronaut, you'll fit
	right in. Discuss ideas in the IRC chat room, or post questions in the
	forum.</p>
<h3>Red, Green, Refactor</h3>
<p>Laravel is built with testing in mind. Stay flexible with the IoC
	container, and run your tests with PHPUnit. Don't worry... it's easier
	than you think.</p>
<h3 id="g1">Server Requirement</h3>
<p>The Laravel framework has a few system requirements. Of course, all
	of these requirements are satisfied by the Laravel Homestead virtual
	machine:</p>
<ul>
	<li>PHP >= 5.5.9
	
	<li>OpenSSL PHP Extension
	
	<li>PDO PHP Extension
	
	<li>Mbstring PHP Extension
	
	<li>Tokenizer PHP Extension

</ul>
<hr>
<h2 id="g2">Installation of Laravel 5</h2>
<ul>
	<li>Install Composer
	
	<li>Install Laravel
		<ul>
			<li>Laravel Installer using composer <pre>
	composer global require "laravel/installer=~1.1"
	composer create-project laravel/laravel laravel-demo
</pre>
			</li>
			<li>Git clone <pre> 
	https://github.com/laravel/laravel
</pre>
			</li>
			<li>Download <pre>
	https://github.com/laravel/laravel/archive/master.zip
</pre>
			</li>
		</ul>
	</li>
</ul>
<hr>
<h3>Keyword : Dependency Manager, github, project</h3>
<table class="table table-bordered table-striped table-hover">
	<colgroup>
		<col class="col-xs-3">
		<col class="col-xs-9">
	</colgroup>
	<thead>
		<tr>
			<th>Attribute</th>
			<th>Meaning</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>--prefer-dist</td>
			<td>Reverse of --prefer-source, composer will install from dist if
				possible. This can speed up installs substantially on build servers
				and other use cases where you typically do not run updates of the
				vendors. It is also a way to circumvent problems with git if you do
				not have a proper setup.</td>
		</tr>
		<tr>
			<td>--no-dev</td>
			<td>Skip installing packages listed in require-dev</td>
		</tr>
		<tr>
			<td>Issue</td>
			<td>Permission app/storage (+w)</td>
		</tr>
		<tr>
			<td>--prefer-source</td>
			<td>There are two ways of downloading a package: source and dist. For
				stable versions composer will use the dist by default. The source is
				a version control repository. If --prefer-source is enabled,
				composer will install from source if there is one. This is useful if
				you want to make a bugfix to a project and get a local git clone of
				the dependency directly.</td>
		</tr>
		<tr>
			<td>--prefer-dist</td>
			<td>Reverse of --prefer-source, composer will install from dist if
				possible. This can speed up installs substantially on build servers
				and other use cases where you typically do not run updates of the
				vendors. It is also a way to circumvent problems with git if you do
				not have a proper setup.</td>
		</tr>
		<tr>
			<td>--ignore-platform-reqs</td>
			<td>ignore php, hhvm, lib-* and ext-* requirements and force the
				installation even if the local machine does not fulfill these.</td>
		</tr>
		<tr>
			<td>--dev</td>
			<td>Install packages listed in require-dev (this is the default
				behavior).</td>
		</tr>
		<tr>
			<td>--no-dev</td>
			<td>Skip installing packages listed in require-dev.</td>
		</tr>
		<tr>
			<td>--no-autoloader</td>
			<td>Skips autoloader generation.</td>
		</tr>
		<tr>
			<td>--no-scripts</td>
			<td>Skips execution of scripts defined in composer.json.</td>
		</tr>
		<tr>
			<td>--no-plugins</td>
			<td>Disables plugins.</td>
		</tr>
		<tr>
			<td>--no-progress</td>
			<td>Removes the progress display that can mess with some terminals or
				scripts which don't handle backspace characters.</td>
		</tr>
		<tr>
			<td>--optimize-autoloader (-o)</td>
			<td>Convert PSR-0/4 autoloading to classmap to get a faster
				autoloader. This is recommended especially for production, but can
				take a bit of time to run so it is currently not done by default</td>
		</tr>
	</tbody>
</table>

