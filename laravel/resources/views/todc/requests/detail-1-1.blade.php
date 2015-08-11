<h3>Sample</h3>
<p>There are 3 main points that we need to remember when working with
	request</p>
<ul>
	<li>Type-hint the <code>Illuminate\Http\Request</code> in the
		controllers
	
	<li>Type <code>Request</code> as a parameter of function in the
		controllers
	
	<li>Create form with method is <code>post, put, delete in the view</code>
	
	<li>Create route to access this

</ul>
<p>In app/Http/Controllers/UserController.php</p>
<pre>
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return "UserId {$id} is updated successfullly!";
    }
}
</pre>
<p>In routes.php</p>
<pre>
Route::put('user8/{id}', 'UserController@update');
Route::post('user8/{id}', 'UserController@update');
Route::delete('user8/{id}', 'UserController@update');
Route::get('user8/{id}', 'UserController@update');
</pre>
<h4><span class="label label-success">View example</span></h4>
<div class="row">
	<div class="col-md-3">
		<!-- open form -->
		{!! Form::open(array('class' => 'form', 'method' => 'post', 'url' =>
		url('user8/111'))) !!} {!! Form::submit('Post', array('class'=>'btn
		btn-lg btn-danger')) !!} {!! Form::close() !!}
		<!-- close form -->
	</div>
	<div class="col-md-3">
		<!-- open form -->
		{!! Form::open(array('class' => 'form', 'method' => 'put', 'url' =>
		url('user8/111'))) !!} {!! Form::submit('Put', array('class'=>'btn
		btn-lg btn-danger')) !!} {!! Form::close() !!}
		<!-- close form -->
	</div>
	<div class="col-md-3">
		<!-- open form -->
		{!! Form::open(array('class' => 'form', 'method' => 'delete', 'url' =>
		url('user8/111'))) !!} {!! Form::submit('Delete', array('class'=>'btn
		btn-lg btn-danger')) !!} {!! Form::close() !!}
		<!-- close form -->
	</div>
	<div class="col-md-3">
		<!-- open form -->
		{!! Form::open(array('class' => 'form', 'method' => 'get', 'url' =>
		url('user8/111'))) !!} {!! Form::submit('Get', array('class'=>'btn
		btn-lg btn-danger')) !!} {!! Form::close() !!}
		<!-- close form -->
	</div>
</div>

