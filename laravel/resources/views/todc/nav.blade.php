<nav class="navbar navbar-toolbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#navbar" aria-expanded="false"
				aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand dropdown" href="{{ url('company') }}">Mulodo</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li
					class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button"
					aria-haspopup="true" aria-expanded="true"
					href="#">Demos<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('company') }}">Company Website</a></li>
						<li><a href="{{ url('administrator') }}">Administrator</a></li>
					</ul>
				</li>
				<li
					class="dropdown {{ URL::current() == route('general') ? 'active' : '' }}">
					<a href="{{ url('general') }}" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="true">Laravel 5 <span class="caret"></span>
				</a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('general') }}">Requirements</a></li>
						<!-- Installation -->
						<li role="separator" class="divider"></li>
						<li class="dropdown-header">Installation</li>
						<li><a href="{{ url('general') }}#g2-1">Installation of Vagrant and Virtual Box</a></li>
						<li><a href="{{ url('general') }}#g2-2">Installation of phpMyAdmin</a></li>
						<li><a href="{{ url('general') }}#g2-3">Clone Laravel Homestead and configure</a></li>
						<li><a href="{{ url('general') }}#g2-4">Installing multi sites</a></li>
						<!-- Installation -->
						<!-- Database -->
						<li role="separator" class="divider"></li>
						<li class="dropdown-header">Database</li>
						<li><a href="{{ url('general') }}#g2-3-1">Connect database</a></li>
						<li><a href="{{ url('general') }}#g2-3-3">Create one table</a></li>
						<li><a href="{{ url('general') }}#g2-3-2">Migrate tables</a></li>
						<li><a href="{{ url('general') }}#g2-3-4">Add sample data into tables</a></li>
						<!-- Database -->
						<!-- Authenticate -->
						<li role="separator" class="divider"></li>
						<li class="dropdown-header">Authenticate</li>
						<li><a href="{{ url('general') }}#g2-4-1">Get back default authentication</a></li>
						<li role="separator" class="divider"></li>
						<!-- Authenticate -->
						<!-- Form -->
						<li><a href="{{ url('general') }}#g6">Form Elements</a></li>
						<!-- Form -->
						<li><a href="{{ url('general') }}#g3">Common Errors and Solutions</a></li>
						<li><a href="{{ url('general') }}#g5">Deployment</a></li>
						<li><a href="{{ url('general') }}#g4">Userful Links</a></li>
					</ul>
				</li>
				<li
					class="dropdown {{ URL::current() == route('routing') ? 'active' : '' }}">
					<a href="{{ url('routing') }}" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="true">Routing <span class="caret"></span>
				</a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('routing') }}">Basic Routing</a></li>
						<li><a href="{{ url('routing') }}#r2">Route Parameters</a></li>
						<li><a href="{{ url('routing') }}#r3">Named Routes</a></li>
						<li><a href="{{ url('routing') }}#r4">Route Groups</a></li>
						<li><a href="{{ url('routing') }}#r5">CSRF Protection</a></li>
						<li><a href="{{ url('routing') }}#r6">Form Method Spoofing</a></li>
						<li><a href="{{ url('routing') }}#r8">Secure Routes</a></li>
						<li><a href="{{ url('routing') }}#r9">Advanced Routes</a></li>
					</ul>
				</li>
				<li
					class="dropdown {{ URL::current() == route('middleware') ? 'active' : '' }}">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button"
					aria-haspopup="true" aria-expanded="true"
					href="{{ url('middleware') }}">Middleware <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('middleware') }}">Defining Middleware</a></li>
						<li><a href="{{ url('middleware') }}#m2">Registering Middleware</a></li>
						<li><a href="{{ url('middleware') }}#m3">Middleware Parameters</a></li>
						<li><a href="{{ url('middleware') }}#m4">Terminable Middleware</a></li>
					</ul>
				</li>
				<li
					class="dropdown {{ URL::current() == route('controllers') ? 'active' : '' }}">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button"
					aria-haspopup="true" aria-expanded="true"
					href="{{ url('controllers') }}">Controllers <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('controllers') }}">Basic Controllers</a></li>
						<li><a href="{{ url('controllers') }}#c2">Controller Middleware</a></li>
						<li><a href="{{ url('controllers') }}#c3">RESTful Resource
								Controllers</a></li>
						<li><a href="{{ url('controllers') }}#c4">Implicit Controllers</a></li>
						<li><a href="{{ url('controllers') }}#c5">Dependency Injection &
								Controllers</a></li>
						<li><a href="{{ url('controllers') }}#c6">Route Caching</a></li>
					</ul>
				</li>
				<li
					class="dropdown {{ URL::current() == route('models') ? 'active' : '' }}">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button"
					aria-haspopup="true" aria-expanded="true"
					href="{{ url('models') }}">Models <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('models') }}">Basic Models</a></li>
					</ul>
				</li>
				<li
					class="dropdown {{ URL::current() == route('requests') ? 'active' : '' }}">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button"
					aria-haspopup="true" aria-expanded="true"
					href="{{ url('requests') }}">Requests <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('requests') }}">Accessing The Request</a></li>
						<li><a href="{{ url('requests') }}#r2">Retrieving Input</a></li>
					</ul>
				</li>
				<li
					class="dropdown {{ URL::current() == route('responses') ? 'active' : '' }}">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button"
					aria-haspopup="true" aria-expanded="true"
					href="{{ url('responses') }}">Responses <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('responses') }}">Basic Responses</a></li>
						<li><a href="{{ url('responses') }}#rs2">Other Response Types</a></li>
						<li><a href="{{ url('responses') }}#rs3">Redirects</a></li>
						<li><a href="{{ url('responses') }}#rs4">Response Macros</a></li>

					</ul>
				</li>
				<li
					class="dropdown {{ URL::current() == route('views') ? 'active' : '' }}">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button"
					aria-haspopup="true" aria-expanded="true" href="{{ url('views') }}">Views
						<span class="caret"></span>
				</a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('views') }}">Basic Usage</a></li>
						<li><a href="{{ url('views') }}#v2">View Composers</a></li>
					</ul>
				</li>
				<li
					class="dropdown {{ URL::current() == route('blade') ? 'active' : '' }}">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button"
					aria-haspopup="true" aria-expanded="true"
					href="{{ route('blade') }}">Blade Templates <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('blade') }}">Template Inheritance</a></li>
						<li><a href="{{ url('blade') }}#b2">Displaying Data</a></li>
						<li><a href="{{ url('blade') }}#b3">Control Structures</a></li>
						<li><a href="{{ url('blade') }}#b4">Service Injection</a></li>
						<li><a href="{{ url('blade') }}#b5">Extending Blade</a></li>
					</ul>
				</li>
				<li
					class="dropdown {{ URL::current() == route('cheatsheets') ? 'active' : '' }}">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button"
					aria-haspopup="true" aria-expanded="true" href="{{ url('cheatsheets') }}">Cheat Sheets
						<span class="caret"></span>
				</a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('cheatsheets') }}">Laravel 5</a></li>
						<li><a href="{{ url('cheatsheets') }}#cs2">Git</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</nav>