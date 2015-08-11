<h3>Errors when installing</h3>
<p>
	When running
	<code>composer global require "laravel/homestead=~2.0"</code>
	in Terminal
</p>
<div class="alert alert-danger" role="alert">Error 1: Make sure to place the ~/.composer/vendor/bin directory in
	your PATH</div>
<h4><span class="label label-success">Solution</span></h4>
<ul>
	<li>Add “~/.composer/vendor/bin” into “etc/paths” by command line: <code>sudo
			nano /etc/paths</code>
	
	<li>Results <pre>
/usr/local/bin
/usr/bin
/bin
/usr/sbin
/sbin
~/.composer/vendor/bin
</pre>
</ul>
<hr>
<div class="alert alert-danger" role="alert">Error 2: error:14090086:SSL
	routines:SSL3_GET_SERVER_CERTIFICATE:certificate verify failed Solution
	(reason: composer global require "laravel/homestead=~2.0")</div>
<h4><span class="label label-success">Solution</span></h4>
<ul>
	<li>Checking certificate file by command line: <code>$ php -r
			"print_r(openssl_get_cert_locations());"</code> <pre>
array(8) { ["default_cert_file"]=> string(46) "/Applications/AMPPS/extra/etc/openssl/cert.pem" ["default_cert_file_env"]=> string(13) "SSL_CERT_FILE" ["default_cert_dir"]=> string(43) "/Applications/AMPPS/extra/etc/openssl/certs" ["default_cert_dir_env"]=> string(12) "SSL_CERT_DIR" ["default_private_dir"]=> string(45) "/Applications/AMPPS/extra/etc/openssl/private" ["default_default_cert_area"]=> string(37) "/Applications/AMPPS/extra/etc/openssl" ["ini_cafile"]=> string(0) "" ["ini_capath"]=> string(0) "" }
</pre>
	</li>
	<li>Download http://curl.haxx.se/ca/cacert.pem by command line <code>$
			wget http://curl.haxx.se/ca/cacert.pem</code>
	
	<li>Copy certificate PEM file into default_cert_file location by
		command line <code>$ sudo mv cacert.pem
			/Applications/AMPPS/extra/etc/openssl/cert.pem</code>
	</li>
</ul>
<hr>
<div class="alert alert-danger" role="alert">Error 3: [ErrorException] file_put_contents(/Users/user/.composer/cache/repo/https---packagist.org/packages.json): failed to open stream: Permission denied</div>
<h4><span class="label label-success">Solution</span></h4>
<ul>
<li>Chmod 0777 for this folder by command line <code>sudo chmod -R 0777 /Users/user/.composer/cache/repo/https---packagist.org</code>
<li>Check result by typing this command line <code>ls -l</code>
</ul>
<hr>
<div class="alert alert-danger" role="alert">Error 4: Could not fetch https://api.github.com/repos/sebastianbergmann/version/zipball/58b3a85e7999757d6ad81c787a1fbf5ff6c628c6, please create a GitHub OAuth token to go over the API rate limit
Head to https://github.com/settings/tokens/new?scopes=repo&description=Composer+on+Randy.local+2015-07-30+0416</div>
<h4><span class="label label-success">Solution</span></h4>
<ul>
<li>Go to github.com and create your OAuth token
<li>After that, paste it into token (hidden) on your terminal. Then press enter to continue process.
<li>Sample token: 04667316fa1d9dcfce20820f1825611bdb2b654b
</ul>