<h3 id="g2-3">Clone Laravel Homestead and configure</h3>
<ol>
	<li>Open Terminal at your working folder. <code>Note: Your working
			folder must be mapped with folders in Homestead.yaml</code>
		<p>
			Example: my working folder is
			<code>/Applications/AMPPS/www/2015/laravel/Homestead/Homestead/</code>
			in this case
		</p>
	</li>
	<li>Type <code>git clone https://github.com/laravel/homestead.git
			Homestead</code> <pre>
git clone https://github.com/laravel/homestead.git Homestead
Cloning into 'Homestead'...
remote: Counting objects: 1070, done.
remote: Compressing objects: 100% (12/12), done.
remote: Total 1070 (delta 5), reused 0 (delta 0), pack-reused 1058
Receiving objects: 100% (1070/1070), 158.85 KiB | 145.00 KiB/s, done.
Resolving deltas: 100% (629/629), done.
Checking connectivity... done.
</pre>
	</li>
	<li>Via Composer Create-Project by typing <code>composer create-project
			laravel/laravel --prefer-dist</code> <pre>
Installing laravel/laravel (v5.1.4)
  - Installing laravel/laravel (v5.1.4)
    Loading from cache

Created project in /Applications/AMPPS/www/2015/laravel/Homestead/test-homestead/Homestead/laravel
> php -r "copy('.env.example', '.env');"
Loading composer repositories with package information
Installing dependencies (including require-dev)
...
Writing lock file
Generating autoload files
> php artisan clear-compiled
> php artisan optimize
Generating optimized class loader
> php artisan key:generate
Application key [9f7uzDvPr2POvDs5iejI6YgpXzPJoYEm] set successfully.
</pre>
	</li>
	<li>Type <code>homestead up</code>

</ol>
<hr>
<h3 id="g2-4">Installing multi sites</h3>
<ol>
	<li>Type <code>git clone https://github.com/laravel/homestead.git
			Homestead</code> in your working folder
	
	<li>Open <code>Vagrant file</code> and edit <code>confDir = $confDir
			||= File.expand_path(“~/.[add your prefix for site 2]homestead")</code>
		<pre>confDir = $confDir ||= File.expand_path(“~/.company-homestead")</pre>
	</li>
	<li>Open <code>init.sh</code> and edit <code>homesteadRoot</code> <pre>
homesteadRoot=~/.company-homestead
</pre>
	</li>
	<li>Type <code>bash init.sh</code> to create <code>~/.company-homestead</code>
	</li>
	<li>Type <code>composer create-project laravel/laravel --prefer-dist</code></li>
	<li>When installing laravel from this command above, it may need <code>token</code>
		of your account Github. You must go to Github => Login => Settings =>
		Personal access tokens => Generate token => Copy and paste into
		Terminal when it asks.
	</li>

	<li>Add a host into file <code>/private/etc/hosts</code> <pre>sudo nano /private/etc/hosts</pre>
	</li>
	<li>Type <code>sudo nano ~/.company-homestead/Homestead.yaml</code> to
		change folder and site
	</li>

	<li>Type <code>homestead up</code>

</ol>
After using homestead, you can destroy them by using
<code>homestead destroy</code>
<hr>
<h3 id="g2-5">Installing HomeStead on Windows 8.1</h3>
<p>Step by step to install</p>
<ul>
	<li>Install Virtual Box : https://www.virtualbox.org/wiki/Downloads
	
	<li>Install Vagrant : http://www.vagrantup.com/downloads.html
	
	<li>Install Git-Scm : http://git-scm.com/
	
	<li>On Desktop , create folder name <code>Code</code>, open this folder
		with <code>Git Bash</code>
	
	<li>Clone Homestead repository <code>$ git clone
			https://github.com/Mulodo-PHP-Laravel-Training/laravel-homestead.git</code>
	
	<li>Open file <code>init.sh</code> to change <code>homesteadRoot</code>
	
	<li>Run <code>init.sh</code> in <code>laravel-homestead</code>
		directory <pre>$ bash init.sh
// bash command will create file Homstead.yaml  ( if you don’t see this file, that means you entered wrong path )
</pre>
	</li>
	<li>Back to root folder & set SSH Key <code>$ ssh-keygen -t rsa -C
			"you@homestead"</code>
	
	<li>Find and edit file <code>Homestead.yaml</code> <pre>
ip: "192.168.10.10"
memory: 2048
cpus: 1
provider: virtualbox

authorize: C:/Users/mulodo/.ssh/id_rsa.pub

keys:
    - C:/Users/mulodo/.ssh/id_rsa

folders:
    - map: C:/Users/mulodo/Desktop/Code/laravel-homestead
      to: /home/vagrant/Code

sites:
    - map: homestead.app
      to: /vagrant/laravel/public

databases:
    - homestead
</pre>
	</li>
	<li>Add a host into <code>hosts file</code> such as <code>127.0.0.1
			homestead.app</code>
	
	<li>Run <code>vagrant</code> in folder contain Homestead.yaml like this
		<code>$ vagrant up</code> (If you see a bootstrap page, that’s
		success)
	
	<li>Open putty or SSH client and login with this info
		<ul>
			<li>host : 127.0.0.1
			
			<li>port : 2222
			
			<li>user : vagrant
			
			<li>pass : empty or vagrant
		
		</ul>
	</li>
	<li>Go to laravel folder <code>$ cd /vagrant/laravel/</code>
	
	<li>Install composer <code>$ curl -sS https://getcomposer.org/installer
			| php</code>
	
	<li>Install Laravel library <code>$ php composer.phar install</code>
	
	<li>Create app key <code>$ php artisan key:generate</code>

</ul>
<hr>
<h3 id="g2-6">Laravel Project Structure</h3>
<ul>
	<li>The /app directory remains, but it is now home to only the http and
		application layers of the project(s). In the example above, three
		related applications share the project space; Admin, API & Client.
	
	<li>App/lang The Laravel Lang class provides a convenient way of
		retrieving strings in various languages, allowing you to easily
		support multiple languages within your application.
	
	<li>The app directory, as you might expect, contains the core code of
		your application. We'll explore this folder in more detail soon.
	
	<li>The bootstrap folder contains a few files that bootstrap the
		framework and configure autoloading.
	
	<li>The config directory, as the name implies, contains all of your
		application's configuration files.
	
	<li>The database folder contains your database migration and seeds.
	
	<li>The public directory contains the front controller and your assets
		(images, JavaScript, CSS, etc.).
	
	<li>The resources directory contains your views, raw assets (LESS,
		SASS, CoffeeScript), and "language" files.
	
	<li>The storage directory contains compiled Blade templates, file based
		sessions, file caches, and other files generated by the framework.
	
	<li>The tests directory contains your automated tests.
	
	<li>The vendor directory contains your Composer dependencies

</ul>
<p>Main files should be previewed</p>
<ol>
	<li>Request enters public/index.php file.
	
	<li>bootstrap/start.php file creates Application and detects
		environment.
	
	<li>Internal framework/start.php file configures settings and loads
		service providers.
	
	<li>Application app/start files are loaded.
	
	<li>Application app/routes.php file is loaded.
	
	<li>Request object sent to Application, which returns Response object.
	
	
	<li>Response object sent back to client.

</ol>