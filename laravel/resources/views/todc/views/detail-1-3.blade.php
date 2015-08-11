<h3>Sharing Data With All Views</h3>
<p>Occasionally, you may need to share a piece of data with all views
	that are rendered by your application. You may do so using the view
	factory's <code>share</code> method. Typically, you would place calls to <code>share</code>
	within a service provider's <code>boot</code> method. You are free to add them to
	the <code>AppServiceProvider</code> or generate a separate service provider to house
	them:</p>
<pre>
namespace App\Providers;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('key', 'value');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
</pre>