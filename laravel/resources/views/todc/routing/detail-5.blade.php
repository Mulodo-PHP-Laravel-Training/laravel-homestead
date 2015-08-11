<h2>CSRF Protection</h2>
<p>
	Laravel makes it easy to protect your application from
	<code>cross-site request</code>
	forgeries. Cross-site request forgeries are a type of malicious exploit
	whereby unauthorized commands are performed on behalf of the
	authenticated user.
</p>
<p>
	Laravel automatically generates a CSRF "token" for each active user
	session managed by the application. This token is used to verify that
	the authenticated user is the one actually making the requests to the
	application. To generate a hidden input field
	<code>_token</code>
	containing the CSRF token, you may use the
	<code>csrf_field</code>
	helper function:
</p>
<pre><?php echo csrf_field(); ?></pre>
<p>The csrf_field helper function generates the following HTML:</p>
<pre>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
</pre>
<p>Of course, using the Blade templating engine</p>
<div class="alert alert-warning" role="alert">Examples: generate token
	and show _token</div>
<p>{!! csrf_field() !!}</p>
<p>{!! csrf_token() !!}</p>
<hr>
<h3>Excluding URIs From CSRF Protection</h3>
<p>
	Sometimes you may wish to exclude a set of URIs from CSRF protection.
	For example, if you are using
	<code>Stripe</code>
	to process payments and are utilizing their webhook system, you will
	need to exclude your webhook handler route from Laravel's CSRF
	protection.
</p>
<p>
	You may exclude URIs by adding them to the
	<code>$except</code>
	property of the
	<code>VerifyCsrfToken</code>
	middleware:
</p>
<pre>
namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'stripe/*',
    ];
}
</pre>
<hr>
<h3>X-XSRF-TOKEN</h3>
<p>Laravel also stores the CSRF token in a <code>XSRF-TOKEN</code> cookie. You can
	use the cookie value to set the <code>X-XSRF-TOKEN</code> request header. Some
	JavaScript frameworks, like Angular, do this automatically for you. It
	is unlikely that you will need to use this value manually.</p>