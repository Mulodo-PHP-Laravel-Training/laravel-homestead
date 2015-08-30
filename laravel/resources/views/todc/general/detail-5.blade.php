<h2 id="g5-1">Deployment</h2>
<p>coming soon...</p>
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
