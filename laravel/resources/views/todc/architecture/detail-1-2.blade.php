<h2 id="vt1-2">Service Providers & Service Containers</h2>
<p>These main points that we need to know when working with Service
	Providers</p>
<ul>
	<li>Within a service provider, you always have access to the container
		via the <code>$this->app</code> instance variable.
	</li>
</ul>
<h3>Create a new service provider</h3>
<p>
	The Artisan CLI can easily generate a new provider via the
	<code>make:provider</code>
	command:
</p>
<pre>php artisan make:provider RiakServiceProvider</pre>
<p>After creating, this is default content of the provider</p>
<pre>
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
</pre>
<p>There are these main methods:</p>
<ul>
	<li>The Register Method: use to define an implementation. <p>There are
		many ways to register:</p>
		<ul>
			<li><code>$this->app->bind</code> <pre>
use Riak\Connection;
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('FooBar', function($app)
		{
		    return new FooBar($app['SomethingElse']);
		});
    }

}
			</pre>
			</li>
			<li><code>$this->app->singleton</code> <pre>
use Riak\Connection;
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Riak\Contracts\Connection', function($app)
        {
            return new Connection($app['config']['riak']);
        });
    }

}
			</pre>
			</li>
			<li><code>$this->app->instance</code> <pre>
use Riak\Connection;
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $fooBar = new FooBar(new SomethingElse);

		$this->app->instance('FooBar', $fooBar);
    }

}
			</pre>
			</li>
		</ul>
	</li>
	<li>The Boot Method: This method is called after all other service providers have been registered
	<pre>
 public function boot()
    {
        Event::listen('SomeEvent', 'SomeEventHandler');
    }
	</pre>
	</li>
</ul>
<hr>
<h3>Registering the service providers into system core</h3>
<p>Open file <code>config/app.php</code> then adding 1 line into array<code>providers</code> as example below</p>
<pre>
'providers' => [
		/*
         * Laravel Framework Service Providers...
         */
        Illuminate\Foundation\Providers\ArtisanServiceProvider::class,
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Routing\ControllerServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,
    	
    	// Your service providers
    	App\Providers\RiakServiceProvider::class,

    ],
</pre>
<hr>