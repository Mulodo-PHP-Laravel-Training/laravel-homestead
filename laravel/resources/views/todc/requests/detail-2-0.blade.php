<h4>Retrieving An Input Value</h4>
<p>
	Using a few simple methods, you may access all user input from your
	<code>Illuminate\Http\Request</code>
	instance.
</p>
<pre>
$name = $request->input('name');
</pre>
<h4>
	<span class="label label-success">View example</span>
</h4>
<!-- open form -->
{!! Form::open(array('class' => 'form', 'method' => 'post', 'url' =>
url('user13'))) !!}
<div class="form-group">
	<label for="exampleInputEmail1">Email address</label> {!!
	Form::text('email', null, array('class'=>'form-control',
	'placeholder'=>'Enter your email address', 'id'=>'exampleInputEmail1'))
	!!}
</div>
<div class="form-group">
	<label for="exampleInputPassword1">Password</label> {!!
	Form::password('password', array('class'=>'form-control',
	'placeholder'=>'Enter your password', 'id'=>'exampleInputPassword1'))
	!!}
</div>
<div class="form-group">
	<label for="exampleInputFile">File input</label> {!!
	Form::file('password', null, array('id'=>'exampleInputFile1')) !!}
	<p class="help-block">Example block-level help text here.</p>
</div>
<div class="checkbox">
	<label>{!! Form::checkbox('agree', 1, true) !!} Check me out!</label>
</div>
<div class="checkbox">
	<label>{!! Form::checkbox('agree', 1, false) !!} Check me out!</label>
</div>
{!! Form::submit('Submit', array('class'=>'btn btn-danger')) !!} {!!
Form::close() !!}
<!-- close form -->
<hr>
<h4>Determining If An Input Value Is Present</h4>
<p>
	To determine if a value is present on the request, you may use the
	<code>has</code>
	method. The has method returns true if the value
	<code>is present</code>
	and
	<code>is not an empty string</code>
</p>
<pre>
// In UserController.php
public function retriveInputs(Request $request) {
	if ($request->has('email')) {
		echo "Name is {$request->input('email')}";
	}
}
</pre>
<h4>Retrieving All Input Data</h4>
<p>
	You may also
	<code>retrieve all</code>
	of the input data as an
	<code>array</code>
	using the
	<code>all</code>
	method:
</p>
<pre>$input = $request->all();</pre>
<p>Sample results from the form above</p>
<pre>
array (size=4)
  '_token' => string 'voowEQXSu9mTuGAssRdew4PSonFs7RR7Yj2ytLcV' (length=40)
  'email' => string 'test' (length=4)
  'password' => string 'test' (length=4)
  'agree' => string '1' (length=1)
</pre>
<h4>Retrieving A Portion Of The Input Data</h4>
<p>If you need to retrieve a sub-set of the input data, you may use the
	<code>only</code> and <code>except</code> methods. Both of these methods accept a single <code>array</code> as
	their only argument:</p>
<pre>
$input = $request->only('username', 'password');
$input = $request->except('credit_card');
</pre>