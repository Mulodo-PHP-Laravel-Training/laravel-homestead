<h2>Basic Models</h2>
<p>
	To create a new model, use the
	<code>mode</code>
	Artisan command:
</p>
<pre>
php artisan make:mode sliders
</pre>
<p>
	This command will place a new
	<code>sliders</code>
	class within your
	<code>app/</code>
	directory.
</p>
<p>Here is an example of a basic model class. All Laravel
	models should extend the base model class included with the
	default Laravel installation:</p>
<pre>
namespace App;

use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    //
}
</pre>

