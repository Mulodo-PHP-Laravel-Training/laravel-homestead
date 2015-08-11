<h2>Controller Middleware</h2>
<p>
	<code>Middleware</code>
	may be assigned to the controller's routes like so:
</p>
<pre>
Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
]);
</pre>
<p>However, it is more convenient to specify <code>middleware</code> within your
	controller's constructor. Using the middleware method from your
	controller's constructor, you may easily assign middleware to the
	controller. You may even restrict the middleware to only certain
	methods on the controller class:</p>
<pre>
class UserController extends Controller
{
    /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('log', ['only' => ['fooAction', 'barAction']]);

        $this->middleware('subscribed', ['except' => ['fooAction', 'barAction']]);
    }
}
</pre>