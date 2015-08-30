<p>
	<img alt="" src="img/DI-relationships.png">
</p>
<h2 id="vt1-2">Service Provider</h2>
<p>These main points that we need to know when working with Service
	Providers</p>
<ul>
	<li>Within a service provider, you always have access to the container
		via the <code>$this->app</code> instance variable.
	</li>
</ul>
<p>
	All default service providers is located at
	<code>app/Providers</code>
</p>
<ul>
	<li>AppServiceProvider.php
	
	<li>BusServiceProvider.php
	
	<li>ConfigServiceProvider.php
	
	<li>EventServiceProvider.php
	
	<li>FilterServiceProvider.php
	
	<li>RepoServiceProvider.php
	
	<li>RouteServiceProvider.php

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
	<li>The Register Method: use to define an implementation.
		<p>There are many ways to register:</p>
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
			</pre></li>
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
			</pre></li>
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
			</pre></li>
		</ul>
	</li>
	<li>The Boot Method: This method is called after all other service
		providers have been registered <pre>
 public function boot()
    {
        Event::listen('SomeEvent', 'SomeEventHandler');
    }
	</pre>
	</li>
</ul>
<hr>
<h3>Registering the service providers into system core</h3>
<p>
	Open file
	<code>config/app.php</code>
	then adding 1 line into array
	<code>providers</code>
	as example below
</p>
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
<p>
	Example about using service provider at
	<code>app/Providers/AppServiceProvider.php</code>
</p>
<pre>
namespace Backend\Providers;   
use Illuminate\Support\ServiceProvider;   
class AppServiceProvider extends ServiceProvider {   
public function register() {
$this->app->bind( ‘Jaster/Interfaces/FooInterface’,
‘Jaster/Implements/FooImplementClass’ );
 
} 
} 
</pre>
<p>
	Next step: you have to register at
	<code>config/app.php</code>
</p>
<pre>
'providers' => [
 /*

* Laravel Framework Service Providers...

*/

'Illuminate\Foundation\Providers\ArtisanServiceProvider',
 'Illuminate\Auth\AuthServiceProvider',
 'Illuminate\Bus\BusServiceProvider',
 'Illuminate\Cache\CacheServiceProvider',
 'Illuminate\Foundation\Providers\ConsoleSupportServiceProvider',
 'Illuminate\Routing\ControllerServiceProvider',
// ....

],
</pre>
<hr>
<h2>Service Container</h2>
<p>The Laravel service container is a powerful tool for managing class
	dependencies. Dependency injection is a fancy word that essentially
	means this: class dependencies are "injected" into the class via the
	constructor or, in some cases, "setter" methods.</p>
<h3>Trace initialize of service container (
	Illuminate\Foundation\Application )</h3>
<p>
	<img src="img/service-container-1.png">
</p>
<h3>Trace register of Illuminate\Contracts\Http\Kernel</h3>
<p>
	<img src="img/service-container-2.png">
</p>
<h3>Trace how to use Illuminate\Contracts\Http\Kernel</h3>
<p>
	<img src="img/service-container-3.png">
</p>
<h3>Trace Facade autoloader</h3>
<p>
	<img src="img/service-container-4.png">
</p>
<h2>IoC Container (Inversion of Control)</h2>
<p>The IoC container is a way of automaticaly passing dependencies into
	your objects and/or storing them for later retrieval</p>
<p>Compare Hard-coded source dependecy vs IoC Resolution then choosing one that is suitable for your project</p>
<h4>Hard-coded source dependecy</h4>
<pre>
public function sendEmail(){
	$mailer = new Mailer();
	$mailer->send();
}
</pre>
<h4>IoC Resolution</h4>
<pre>
public function sendEmail(){
	$mailer = App::make(‘mailer’)
	$mailer->send();
}
</pre>