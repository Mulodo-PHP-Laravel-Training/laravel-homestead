<h3 id="g2-4-1">Get back default authentication</h3>
<ul>
	<li>Open <code>composer.json</code> <pre>"bestmomo/scafold": "dev-master"</pre>
	</li>
	<li>Open Terminal and type <code>composer update</code>
	
	<li>Add the service provider to your <code>config/app.php</code> <pre>Bestmomo\Scafold\ScafoldServiceProvider::class</pre>
	</li>
	<li>Publish the views and assets <pre>php artisan vendor:publish</pre>
		<p>You will see these lines if it runs successfully</p> <pre>
Copied Directory [/vendor/bestmomo/scafold/views] To [/resources/views]
Copied Directory [/vendor/bestmomo/scafold/views/auth] To [/resources/views/auth]
Copied Directory [/vendor/bestmomo/scafold/views/emails] To [/resources/views/emails]
Copied Directory [/vendor/bestmomo/scafold/public] To [/public]
Publishing complete for tag []!
	</pre>
	</li>
</ul>
<hr>
