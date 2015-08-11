<h2>Form Elements</h2>
<p>Elements' properties can be add together and seperate with the
	commas.</p>
<table class="table table-bordered table-striped table-hover">
	<colgroup>
		<col class="col-xs-3">
		<col class="col-xs-6">
		<col class="col-xs-3">
	</colgroup>
	<thead>
		<tr>
			<th>Title</th>
			<th>Format</th>
			<th>Example</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">Opening a New HTML Form</th>
			<td>
				<p>Form::open()</p>
				<ul>
					<li><p>action: you can choose one of them for form action</p>
						<ul>
							<li>Form::open(array('url' => 'http://full.url/here'))
							
							<li>Form::open(array('route' => 'named.route'))
							
							<li>Form::open(array('action' => 'Controller@method'))
						
						</ul></li>
					<li><p>method (post/get/put/delete)</p>
						<ul>
							<li>Form::open(array('method' => 'post'))
							
							<li>Form::open(array('method' => 'put'))
							
							<li>Form::open(array('method' => 'delete'))
							
							<li>Form::open(array('method' => 'get'))
						
						</ul></li>
					<li><p>
							form with uploading files
							<code>Form::open(array('files' => true))</code>
						</p></li>
					<li><p>
							form with accept-charset
							<code>Form::open(array('accept-charset' => 'UTF-8'))</code>
						</p></li>
				</ul>
			</td>
			<td></td>
		</tr>
		<tr>
			<th scope="row">Creating a New Model Based Form</th>
			<td>Form::model($item, array('route' => array('items.update',
				$item->id)))
				<p>
					Now any
					<code>Form::input(), Form::textarea() and Form::select()</code>
					will use the model to populate the data.
				</p>
			</td>
			<td></td>
		</tr>
		<tr>
			<th scope="row">Closing the Current Form</th>
			<td>Form::close()</td>
			<td>{{ Form::close() }}</td>
		</tr>
		<tr>
			<th scope="row">Generating a Hidden Field With the CSRF Token</th>
			<td>Form::token()</td>
			<td>{{ Form::token() }}</td>
		</tr>
		<tr>
			<th scope="row">Creating a Form Label Element</th>
			<td>Form::label('name', 'Your Name', array('class' => 'mylabel'))</td>
			<td>{{ Form::label('name', 'Your Name', array('class' => 'mylabel'))
				}}</td>
		</tr>
		<tr>
			<th scope="row">Creating a Text Input Field</th>
			<td>Form::text('first_name', 'default value', array('class' =>
				'field', 'id' => 'first_name_id'))</td>
			<td>{{ Form::text('first_name', 'default value', array('class' =>
				'field', 'id' => 'first_name_id')) }}</td>
		</tr>
		<tr>
			<th scope="row">Creating a Password Input Field</th>
			<td>Form::password('secret', array('class' => 'field'))</td>
			<td>{{ Form::password('secret', array('class' => 'field')) }}</td>
		</tr>
		<tr>
			<th scope="row">Creating a Hidden Input Field</th>
			<td>Form::hidden('invisible', 'secret', array('id' =>
				'invisible_id'))</td>
			<td>{{ Form::hidden('invisible', 'secret', array('id' =>
				'invisible_id')) }}</td>
		</tr>
		<tr>
			<th scope="row">Creating an Email Input Field</th>
			<td>Form::email('email_address', 'tien.nguyen@mulodo.com', ['class'
				=> 'field'])</td>
			<td>{{ Form::email('email_address', 'tien.nguyen@mulodo.com',
				['class' => 'field']) }}</td>
		</tr>
		<tr>
			<th scope="row">Creating a URL Input Field</th>
			<td>Form::url('webpage', 'http://a.com', ['class' => 'field'])</td>
			<td>{{ Form::url('webpage', 'http://a.com', ['class' => 'field']) }}</td>
		</tr>
		<tr>
			<th scope="row">Creating a File Input Field</th>
			<td>Form::file('thefile', ['class' => 'field'])</td>
			<td>{{ Form::file('thefile', ['class' => 'field']) }}</td>
		</tr>
		<tr>
			<th scope="row" rowspan="2">Creating a Form Input Field</th>
			<td>Form::input('text', 'name')</td>
			<td>{{ Form::input('text', 'name') }}</td>
		</tr>
		<tr>
			<td>Form::input('email', 'email_address', null, ['class' =>
				'emailfld'])</td>
			<td>{{ Form::input('email', 'email_address', null, ['class' =>
				'emailfld']) }}</td>
		</tr>
		<tr>
			<th scope="row" rowspan="3">Creating a Textarea Input Field</th>
			<td>Form::textarea('notes')</td>
			<td>{{ Form::textarea('notes') }}</td>
		</tr>
		<tr>
			<td>Form::textarea('notes', '3 < 4')</td>
			<td>{{ Form::textarea('notes', '3 < 4') }}</td>
		</tr>
		<tr>
			<td>Form::textarea('notes', null, ['class' => 'field'])</td>
			<td>{{ Form::textarea('notes', null, ['class' => 'field']) }}</td>
		</tr>
		<tr>
			<th scope="row" rowspan="4">Creating a Select Box Field</th>
			<td>Form::select('age', ['Under 18', '19 to 30', 'Over 30'])</td>
			<td>{{ Form::select('age', ['Under 18', '19 to 30', 'Over 30']) }}</td>
		</tr>
		<tr>
			<td>Form::select('age', [ 'young' => 'Under 18', 'adult' => '19 to
				30', 'adult2' => 'Over 30'] )</td>
			<td>{{ Form::select('age', [ 'young' => 'Under 18', 'adult' => '19 to
				30', 'adult2' => 'Over 30'] ) }}</td>
		</tr>
		<tr>
			<td>Select Box with default value
				<p>Form::select('number', [0, 1, 2], 2)</p>
			</td>
			<td>{{ Form::select('number', [0, 1, 2], 2) }}</td>
		</tr>
		<tr>
			<td>Form::select('number', [1, 2, 3], null, ['class' => 'field'])</td>
			<td>{{ Form::select('number', [1, 2, 3], null, ['class' => 'field'])
				}}</td>
		</tr>
		<tr>
			<th scope="row" rowspan="2">Creating a Select Range Field</th>
			<td>Form::selectRange('number', 10, 15)</td>
			<td>{{ Form::selectRange('number', 10, 15) }}</td>
		</tr>
		<tr>
			<td>Select Range with default value
				<p>Form::selectRange('number', 10, 15, 13, ['class' => 'field'])</p>
			</td>
			<td>{{ Form::selectRange('number', 10, 15, 13, ['class' => 'field'])
				}}</td>
		</tr>
		<tr>
			<th scope="row" rowspan="2">Creating a Select Year Field</th>
			<td>Form::selectYear('year', 2013, 2015)</td>
			<td>{{ Form::selectYear('year', 2013, 2015) }}</td>
		</tr>
		<tr>
			<td>Select Year with default value
				<p>Form::selectYear('year', 2013, 2015, 2014, ['class' => 'field'])</p>


			</td>
			<td>{{ Form::selectYear('year', 2013, 2015, 2014, ['class' =>
				'field']) }}</td>
		</tr>
		<tr>
			<th scope="row" rowspan="2">Creating a Month Selection Field</th>
			<td>Form::selectMonth('month')</td>
			<td>{{ Form::selectMonth('month') }}</td>
		</tr>
		<tr>
			<td>Select Month with default value
				<p>Form::selectMonth('month', 7, ['class' => 'field'])</p>
			</td>
			<td>{{ Form::selectMonth('month', 7, ['class' => 'field']) }}</td>
		</tr>
		<tr>
			<th scope="row" rowspan="4">Creating a Checkbox Input Field</th>
			<td>Form::checkbox('agree')</td>
			<td>{{ Form::checkbox('agree') }}</td>
		</tr>
		<tr>
			<td>Form::checkbox('agree', 'yes')</td>
			<td>{{ Form::checkbox('agree', 'yes') }}</td>
		</tr>
		<tr>
			<td>Form::checkbox('agree', 1, true)</td>
			<td>{{ Form::checkbox('agree', 1, true) }}</td>
		</tr>
		<tr>
			<td>Form::checkbox('agree', 1, null, ['class' => 'field'])</td>
			<td>{{ Form::checkbox('agree', 1, null, ['class' => 'field']) }}</td>
		</tr>
		<tr>
			<th scope="row" rowspan="4">Creating a Radio Button Input Field</th>
			<td>Form::radio('single')</td>
			<td>{{ Form::radio('single') }}</td>
		</tr>
		<tr>
			<td><p>Form::radio('sex', 'male')</p>
				<p>Form::radio('sex', 'female')</p></td>
			<td><p>{{ Form::radio('sex', 'male') }}</p>
				<p>{{ Form::radio('sex', 'female') }}</p></td>
		</tr>
		<tr>
			<td><p>Form::radio('sex', 'male', true)</p>
				<p>Form::radio('sex', 'female')</p></td>
			<td><p>{{ Form::radio('sex', 'male', true) }}</p>
				<p>{{ Form::radio('sex', 'female') }}</p></td>
		</tr>
		<tr>
			<td><p>Form::radio('sex', 'male', true, ['class' => 'field'])</p>
				<p>Form::radio('sex', 'female', null, ['class' => 'field'])</p></td>
			<td><p>{{ Form::radio('sex', 'male', true, ['class' => 'field']) }}</p>
				<p>{{ Form::radio('sex', 'female', null, ['class' => 'field']) }}</p></td>
		</tr>
		<tr>
			<th scope="row" rowspan="2">Creating a Reset Input Field</th>
			<td>Form::reset('Clear form')</td>
			<td>{{ Form::reset('Clear form') }}</td>
		</tr>
		<tr>
			<td>Form::reset('Clear form', ['class' => 'field'])</td>
			<td>{{ Form::reset('Clear form', ['class' => 'field']) }}</td>
		</tr>
		<tr>
			<th scope="row" rowspan="3">Creating an Image Input Element</th>
			<td>Form::image('images/submit-button.jpg')</td>
			<td>{{ Form::image('images/submit-button.jpg') }}</td>
		</tr>
		<tr>
			<td>Form::image('images/submit-button.jpg', 'btnSub')</td>
			<td>{{ Form::image('images/submit-button.jpg', 'btnSub') }}</td>
		</tr>
		<tr>
			<td>Form::image('images/submit-button.jpg', 'btnSub', ['class' =>
				'btn'])</td>
			<td>{{ Form::image('images/submit-button.jpg', 'btnSub', ['class' =>
				'btn']) }}</td>
		</tr>
		<tr>
			<th scope="row" rowspan="3">Creating a Submit Button</th>
			<td>Form::submit()</td>
			<td>{{ Form::submit() }}</td>
		</tr>
		<tr>
			<td>Form::submit('Save')</td>
			<td>{{ Form::submit('Save') }}</td>
		</tr>
		<tr>
			<td>Form::submit('Save', ['class' => 'field'])</td>
			<td>{{ Form::submit('Save', ['class' => 'field']) }}</td>
		</tr>
		<tr>
			<th scope="row" rowspan="2">Creating a Button Element</th>
			<td>Form::button('Click Me')</td>
			<td>{{ Form::button('Click Me') }}</td>
		</tr>
		<tr>
			<td>Form::button('Click Me', ['class' => 'field'])</td>
			<td>{{ Form::button('Click Me', ['class' => 'field']) }}</td>
		</tr>
		<tr>
			<th scope="row">Getting the ID Attribute For a Field Name</th>
			<td colspan="2">$id = Form::getIdAttribute('fieldname', $attributes);
			</td>
		</tr>
		<tr>
			<th scope="row">Getting the Value Attribute a Field Should Use</th>
			<td colspan="2">$value = Form::getValueAttribute($fieldname);</td>
		</tr>
		<tr>
			<th scope="row">Getting a Value From the Session's Old Input</th>
			<td colspan="2">$value = Form::old('fieldname');</td>
		</tr>
		<tr>
			<th scope="row">Determining if the Old Input is Empty</th>
			<td colspan="2"><pre>
			if ( ! Form::oldInputIsEmpty())
			{
			    // check the old input value for specific fields
			}
			</pre></td>
		</tr>
		<tr>
			<th scope="row">Getting the Session Store</th>
			<td colspan="2">$session = Form::getSessionStore();</td>
		</tr>
		<tr>
			<th scope="row">Setting the Session Store Implementation</th>
			<td colspan="2"><pre>
				$session = new MySessionHandler;
Form::setSessionStore($session);
				</pre></td>
		</tr>
		<tr>
			<th scope="row">Getting the Select Option for a Value</th>
			<td colspan="2"><pre>
				You must supply this method three arguments:

$display - The display value for the option.
$value - The value of the option.
$selected - The value of the selected option.
$html = Form::getSelectOption('My Option', 1, 3);
$html will equal <option value="1">My Option</option> in this example.

If the $value argument is an array, an option group will be returned.
</pre></td>
		</tr>
	</tbody>
</table>
<hr>