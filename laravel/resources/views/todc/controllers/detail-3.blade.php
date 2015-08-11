<h2>RESTful Resource Controllers</h2>
<p>Step by step to understand a sample controller</p>
<h3>
	Create a
	<code>PhotoController</code>
</h3>
<pre>php artisan make:controller PhotoController</pre>
<h3>Register a resourceful route to the controller:</h3>
<pre>Route::resource('photo', 'PhotoController');</pre>
<p>Basic functions in PhotoController file</p>
<pre>
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return "Photo index function";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return "Photo create function";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        return "Photo store function";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return "Photo show function";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return "Photo edit function";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return "Photo update function";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return "Photo destroy function";
    }
}
</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('/photo') }}"
		role="button">Index function</a>
</p>
<p class="alert alert-warning">Show function can process for
	show/edit/update/store/destroy when these parameters is parsed into URL</p>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('/photo/show') }}"
		role="button">Show function</a> <a class="btn btn-lg btn-primary"
		href="{{ url('/photo/edit') }}" role="button">Show function (edit)</a>
	<a class="btn btn-lg btn-primary" href="{{ url('/photo/update') }}"
		role="button">Show function (update)</a> <a
		class="btn btn-lg btn-primary" href="{{ url('/photo/store') }}"
		role="button">Show function (store)</a> <a
		class="btn btn-lg btn-primary" href="{{ url('/photo/destroy') }}"
		role="button">Show function (destroy)</a>
</p>
<h3>Actions Handled By Resource Controller</h3>
<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Verb</th>
			<th>Path</th>
			<th>Action</th>
			<th>Route Name</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>GET</td>
			<td><code class=" language-php">
					<span class="token operator">/</span>photo
				</code></td>
			<td>index</td>
			<td>photo.index</td>
		</tr>
		<tr>
			<td>GET</td>
			<td><code class=" language-php">
					<span class="token operator">/</span>photo<span
						class="token operator">/</span>create
				</code></td>
			<td>create</td>
			<td>photo.create</td>
		</tr>
		<tr>
			<td>POST</td>
			<td><code class=" language-php">
					<span class="token operator">/</span>photo
				</code></td>
			<td>store</td>
			<td>photo.store</td>
		</tr>
		<tr>
			<td>GET</td>
			<td><code class=" language-php">
					<span class="token operator">/</span>photo<span
						class="token operator">/</span><span class="token punctuation">{</span>photo<span
						class="token punctuation">}</span>
				</code></td>
			<td>show</td>
			<td>photo.show</td>
		</tr>
		<tr>
			<td>GET</td>
			<td><code class=" language-php">
					<span class="token operator">/</span>photo<span
						class="token operator">/</span><span class="token punctuation">{</span>photo<span
						class="token punctuation">}</span><span class="token operator">/</span>edit
				</code></td>
			<td>edit</td>
			<td>photo.edit</td>
		</tr>
		<tr>
			<td>PUT/PATCH</td>
			<td><code class=" language-php">
					<span class="token operator">/</span>photo<span
						class="token operator">/</span><span class="token punctuation">{</span>photo<span
						class="token punctuation">}</span>
				</code></td>
			<td>update</td>
			<td>photo.update</td>
		</tr>
		<tr>
			<td>DELETE</td>
			<td><code class=" language-php">
					<span class="token operator">/</span>photo<span
						class="token operator">/</span><span class="token punctuation">{</span>photo<span
						class="token punctuation">}</span>
				</code></td>
			<td>destroy</td>
			<td>photo.destroy</td>
		</tr>
	</tbody>
</table>
<h3>Partial Resource Routes</h3>
<p>When declaring a resource route, you may specify a subset of actions
	to handle on the route:</p>
<pre>
Route::resource('photo-1', 'PhotoController',
                ['only' => ['index', 'show']]);

Route::resource('photo-2', 'PhotoController',
                ['except' => ['create', 'store', 'update', 'destroy']]);
</pre>
<h3>Naming Resource Routes</h3>
<p>By default, all resource controller actions have a route name;
	however, you can override these names by passing a names array with
	your options:</p>
<pre>
Route::resource('photo-3', 'PhotoController',
                ['names' => ['create' => 'photo.build']]);
</pre>
<h3>Nested Resources</h3>
<pre>Route::resource('photos.comments', 'PhotoCommentController');</pre>
<p>
	This route will register a "nested" resource that may be accessed with
	URLs like the following:
	<code>photos/{photos}/comments/{comments}</code>.
</p>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('photos/119/comments/113') }}" role="button">View
		example</a>
</p>
<h3>Supplementing Resource Controllers</h3>
<pre>Route::get('photos/popular', 'PhotoController@popular');</pre>
<p>
	<a class="btn btn-lg btn-primary" href="{{ url('photos/popular') }}" role="button">View
		example</a>
</p>