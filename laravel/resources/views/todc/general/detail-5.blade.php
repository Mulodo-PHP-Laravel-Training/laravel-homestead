<h2 id="g5-1">Deploy your Laravel applications Using these Easy methods</h2>
<p>To deploy any Laravel application, you will need to perform following steps:</p>
<ul>
<li>Creating production configuration
<li>Creating a directory structure based on your web host
<li>Uploading your Laravel application directory files via SSH or FTP
<li>Creating a database in the production site and upload your local database on the production site
<li>Giving proper permissions to your storage files
<li>Setting up .htaccess based on your server
</ul>
<p>For more detail, please go to <a href="http://learninglaravel.net/deploy-your-laravel-applications-using-these-easy-methods/link">here</a></p>
<h2 id="g5-2">Useful commands</h2>
<table class="table table-bordered table-striped">
	<colgroup>
		<col class="col-xs-3">
		<col class="col-xs-9">
	</colgroup>
	<thead>
		<tr>
			<th>Function</th>
			<th>Command</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Improper PATH Configuration</td>
			<td><pre>
Randy:~ user$ which vagrant
/usr/local/bin/vagrant
			</pre> <pre>
Randy:~ user$ which php
/usr/bin/php
			</pre></td>
		</tr>
		<tr>
		<td>List all entries from the global index</td>
		<td>vagrant global-status</td>
		</tr>
		<tr>
		<td>Remove all invalid entries from the global index</td>
		<td>vagrant global-status --prune</td>
		</tr>
		<tr>
		<td>Change permission for folder and its subfolders</td>
		<td>sudo chmod -R ugo+rwx "/Library/Ruby/Gems”</td>
		</tr>
	</tbody>
</table>
