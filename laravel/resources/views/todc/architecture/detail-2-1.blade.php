<h2>Model</h2>
<p>Sample a model</p>
<pre>
class People extends Eloquent {

    	protected $table = 'people';
    	protected $primaryKey = 'id';

	public function summary(){
		return truncate($this->content,100);
	}
}
</pre>
<p>
	2 features about Model are:
	<code>Active Record style and easy to use</code>
</p>
<pre>
Book::all();
Book::find();
Book::where(‘title’,’like’,’%laravel%’);

$book = new Book();
$book->title = ‘Laravel’;
$book->save();

$affectedRows = User::where('votes', '>', 100)->update(array('status' => 2));

$user = User::find(1);
$user->delete();

use Illuminate\Database\Eloquent\SoftDeletingTrait;
class User extends Eloquent {
    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];
}


$table->softDeletes(); // for migration

$users = User::withTrashed()->where('account_id', 1)->get();

$user->posts()->withTrashed()->get();

$users = User::onlyTrashed()->where('account_id', 1)->get();

$user->restore();

</pre>
<hr>