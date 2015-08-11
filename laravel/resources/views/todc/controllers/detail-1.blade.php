<h2>Basic Controllers</h2>
<p>
	To create a new controller, use the
	<code>make:controller</code>
	Artisan command:
</p>
<pre>
php artisan make:controller UserController
</pre>
<p>
	This command will place a new
	<code>UserController</code>
	class within your
	<code>app/Http/Controllers</code>
	directory.
</p>
<p>Here is an example of a basic controller class. All Laravel
	controllers should extend the base controller class included with the
	default Laravel installation:</p>
<pre>
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller {
	/**
	 * Show the profile for the given user.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function showProfile($id) {
		return view('user.profile', ['userid' => $id]);
	}
}
</pre>
<p>Define a route to access this controller</p>
<pre>
Route::get ( 'user-profile/{id}', [ 
		'uses' => 'UserController@showProfile',
		'as' => 'user-profile-2' 
] );
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ route('user-profile-2', 198) }}" role="button">View
		example</a>
</p>
