<h2>Useful Commands & Links</h2>
<h3>Commands</h3>
<table class="table table-bordered table-striped">
	<colgroup>
		<col class="col-xs-7">
		<col class="col-xs-1">
	</colgroup>
	<thead>
		<tr>
			<th>Function</th>
			<th>Example</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row"><code>vagrant global-status</code></th>
			<td>The command will tell you the state of all active Vagrant
				environments on the system
				<p>
					<span class="label label-success">Example</span>
				</p> <pre>
451fe56  default virtualbox running /Users/user/vm1                                               
e59ec25  default virtualbox running /Users/user                                                   
933bf27  default virtualbox running /Applications/AMPPS/www/2015/laravel/Homestead/test-homestead 
dd8802a  default virtualbox running /Users/user/.composer/vendor/laravel/homestead 
			</pre>
			</td>
		</tr>
		<tr>
			<th scope="row"><code>vagrant destroy [virtualboxId]</code></th>
			<td>vagrant destroy 933bf27</td>
		</tr>
		<tr>
			<th scope="row"><code>sudo nano ~/.homestead/Homestead.yaml</code></th>
			<td>Edit Homestead.yaml</td>
		</tr>
		<tr>
			<th scope="row"><code>homestead up</code></th>
			<td>Run VM</td>
		</tr>
		<tr>
			<th scope="row"><code>homestead destroy</code></th>
			<td>Delete VM</td>
		</tr>
		<tr>
			<th scope="row"><code>homestead ssh</code></th>
			<td>Connect VM by SSH (normally we will have default account is: <code>vagrant/vagrant</code>)</td>
		</tr>
	</tbody>
</table>
<hr>
<h3>Links</h3>
<ul>
	<li><a
		href="http://www.sitepoint.com/6-reasons-move-laravel-homestead/"
		target="_blank">6 Reasons to Move to Laravel Homestead </a></li>
	<li><a
		href="https://teamtreehouse.com/forum/stepbystep-installation-of-laravel-homestead"
		target="_blank"> Step by step of installation of Laravel Homestead </a></li>
	<li><a
		href="http://www.easylaravelbook.com/blog/2015/01/08/installing-and-configuring-homestead-2-dot-0-for-laravel-5/"
		target="_blank"> Install and configure Homestead for Laravel </a></li>
	<li><a
		href="http://laravelcoding.com/blog/laravel-5-beauty-homestead-and-the-laravel-installer"
		target="_blank">Laravel 5.1 Beauty - Homestead and the Laravel
			Installer </a></li>
	<li><a href="https://laravel-news.com/category/homestead/"
		target="_blank">Laravel Homestead New </a></li>
	<li><a
		href="http://designinglives.net/add-new-site-to-homestead-vagrant/"
		target="_blank">Add new site to homestead (vagrant) </a></li>
	<li><a
		href="http://code.tutsplus.com/tutorials/25-laravel-tips-and-tricks--pre-92818"
		target="_blank">25 Laravel Tips and Tricks </a></li>
	<li><a
		href="https://medium.com/laravel-news/the-simple-guide-to-deploy-laravel-5-application-on-shared-hosting-1a8d0aee923e"
		target="_blank">The simple guide to deploy Laravel 5 application on
			shared hosting</a></li>
</ul>
<hr>
<h3>Hosting</h3>
<ul>
	<li><a href="https://forge.laravel.com/" target="_blank">Painless PHP
			Servers - Provision, host, and deploy PHP applications on AWS,
			DigitalOcean, and Linode.</a></li>
</ul>
<hr>
<h3>Vagrant</h3>
<ul>
	<li><a href="https://github.com/smdahlen/vagrant-digitalocean"
		target="_blank">A Vagrant provider plugin that supports the management
			of Digital Ocean droplets (instances).</a></li>
</ul>