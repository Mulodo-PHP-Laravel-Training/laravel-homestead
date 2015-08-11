<h2>Implicit Controllers</h2>
<p>
	Laravel allows you to easily define a single route to handle every
	action in a controller class. First, define the route using the
	<code>Route::controller method</code>
	. The controller method accepts two arguments. The first is the base
	URI the
	<code>controller</code>
	handles, while the second is the class name of the controller:
</p>
<p>In routes.php</p>
<pre>Route::controller('users', 'UserController');</pre>
<p>In app/Http/Controllers/UserController.php</p>
<pre>
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller {
	/**
	 * Responds to requests to GET /users
	 */
	public function getIndex() {
		return "getIndex function";
	}
	
	/**
	 * Responds to requests to GET /users/show/1
	 */
	public function getShow($id) {
		return "getShow function";
	}
	
	/**
	 * Responds to requests to Post /users/show/1
	 */
	public function postShow($id) {
		return "getShow function";
	}
	
	/**
	 * Responds to requests to GET /users/admin-profile
	 */
	public function getAdminProfile() {
		return "getAdminProfile function";
	}
}

</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('users') }}"
		role="button">getIndex (don't need add 'index' as a parameter in URL)</a>
	<a class="btn btn-lg btn-primary" href="{{ url('users/show/113') }}"
		role="button">getShow</a> <a class="btn btn-lg btn-primary"
		href="{{ url('users/admin-profile') }}" role="button">getAdminProfile</a>
</p>
<h3>
	<span class="label label-danger">Rules</span>
</h3>
<ul>
	<li>Define functions in the controllers: <code>[get/post][NameName]</code>
	<li>URLs will be defined as: <code>http://domain.com/users/[name-name]</code>
</ul>