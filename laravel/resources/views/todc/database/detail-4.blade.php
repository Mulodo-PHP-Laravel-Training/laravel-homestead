<h2>Schema Builder</h2>
<table class="table table-bordered table-striped table-hover">
	<colgroup>
		<col class="col-xs-6">
		<col class="col-xs-6">
	</colgroup>
	<thead>
		<tr>
			<th>Command</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><p>$table-&gt;bigIncrements('id');</p></td>
			<td><p>Incrementing ID using a "big integer" equivalent.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;bigInteger('votes');</p></td>
			<td><p>BIGINT equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;binary('data');</p></td>
			<td><p>BLOB equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;boolean('confirmed');</p></td>
			<td><p>BOOLEAN equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;char('name',&nbsp;4);</p></td>
			<td><p>CHAR equivalent with a length.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;date('created_at');</p></td>
			<td><p>DATE equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;dateTime('created_at');</p></td>
			<td><p>DATETIME equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;decimal('amount',&nbsp;5,&nbsp;2);</p></td>
			<td><p>DECIMAL equivalent with a precision and scale.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;double('column',&nbsp;15,&nbsp;8);</p></td>
			<td><p>DOUBLE equivalent with precision, 15 digits in total and 8
					after the decimal point.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;enum('choices',&nbsp;['foo',&nbsp;'bar']);</p></td>
			<td><p>ENUM equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;float('amount');</p></td>
			<td><p>FLOAT equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;increments('id');</p></td>
			<td><p>Incrementing ID for the database (primary key).</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;integer('votes');</p></td>
			<td><p>INTEGER equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;json('options');</p></td>
			<td><p>JSON equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;jsonb('options');</p></td>
			<td><p>JSONB equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;longText('description');</p></td>
			<td><p>LONGTEXT equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;mediumInteger('numbers');</p></td>
			<td><p>MEDIUMINT equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;mediumText('description');</p></td>
			<td><p>MEDIUMTEXT equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;morphs('taggable');</p></td>
			<td><p>Adds INTEGER taggable_id&nbsp;and STRINGtaggable_type.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;nullableTimestamps();</p></td>
			<td><p>Same as timestamps(), except allows NULLs.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;rememberToken();</p></td>
			<td><p>Adds remember_token&nbsp;as VARCHAR(100) NULL.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;smallInteger('votes');</p></td>
			<td><p>SMALLINT equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;softDeletes();</p></td>
			<td><p>Adds deleted_at&nbsp;column for soft deletes.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;string('email');</p></td>
			<td><p>VARCHAR equivalent column.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;string('name',&nbsp;100);</p></td>
			<td><p>VARCHAR equivalent with a length.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;text('description');</p></td>
			<td><p>TEXT equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;time('sunrise');</p></td>
			<td><p>TIME equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;tinyInteger('numbers');</p></td>
			<td><p>TINYINT equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;timestamp('added_on');</p></td>
			<td><p>TIMESTAMP equivalent for the database.</p></td>
		</tr>
		<tr>
			<td><p>$table-&gt;timestamps();</p></td>
			<td><p>Adds created_at&nbsp;and updated_at&nbsp;columns.</p></td>
		</tr>

	</tbody>
</table>