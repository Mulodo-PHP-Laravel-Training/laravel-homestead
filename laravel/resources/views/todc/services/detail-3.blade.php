<h2>Unit testing</h2>
<p>
	Before using
	<code>phpunit</code>
	, you need to check if it is setup completely by using this command
</p>
<pre>
vagrant@homestead:~/Code/laravel$ <span class="label label-danger">phpunit -v</span>
</pre>
<p>If it is installed, you will see this result</p>
<pre>
PHPUnit 4.8.4 by Sebastian Bergmann and contributors.

Runtime:	PHP 5.6.12-1+deb.sury.org~trusty+1 with Xdebug 2.3.2
Configuration:	/home/vagrant/Code/laravel/phpunit.xml

.test test test

Time: 695 ms, Memory: 15.00Mb

OK (1 test, 2 assertions)
</pre>
<p>
	Unless, you need to install
	<code>phpunit</code>
</p>
<h3>Install phpunit</h3>
<pre>
sudo apt-get install phpunit
</pre>
<h3>Using phpunit</h3>
<pre>
vagrant@homestead:~/Code/laravel$ <span class="label label-danger">phpunit</span>
</pre>
<p></p>
<pre>
PHPUnit 4.8.4 by Sebastian Bergmann and contributors.

.test test test

Time: 691 ms, Memory: 15.00Mb

OK (1 test, 2 assertions)
</pre>
<h3>How to write a unit testing</h3>
<ul>
<li>Create testing class with format name <code>[ClassName]Test.php</code> and put into <code>tests</code> folder.
<li>Extends <code>TestCase</code> for this class.
</ul>
<h3>Simple example</h3>
<p>Open <code>app/Http/routes.php</code> and add a route</p>
<pre>
Route::get('welcome', function () {
	return "Welcome to Mulodo Vietnam!";
});
</pre>
<p>Open <code>tests/ExampleTest.php</code> and add a function</p>
<pre>
class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/welcome')
        ->see("Welcome to Mulodo Vietnam!");
    }
}
</pre>
<p>Access virtual machine with command <code>homestead ssh</code>. Then going to <code>laravel folder</code>, after that running this command below</p>
<pre>
vagrant@homestead:~/Code/laravel$ phpunit
</pre>
<p>This is right result</p>
<pre>
PHPUnit 4.8.4 by Sebastian Bergmann and contributors.

.test test test

Time: 882 ms, Memory: 15.00Mb

OK (1 test, 2 assertions)
</pre>
<p>This is wrong result need your checking and fixing</p>
<pre>
PHPUnit 4.8.4 by Sebastian Bergmann and contributors.

Ftest test test

Time: 681 ms, Memory: 15.25Mb

There was 1 failure:

1) ExampleTest::testBasicExample
Failed asserting that 'Welcome to Mulodo Vietnam1!' matches PCRE pattern "/(Welcome to Mulodo Vietnam\!|Welcome to Mulodo Vietnam\!)/i".

/home/vagrant/Code/laravel/vendor/laravel/framework/src/Illuminate/Foundation/Testing/CrawlerTrait.php:278
/home/vagrant/Code/laravel/tests/ExampleTest.php:17

FAILURES!
Tests: 1, Assertions: 2, Failures: 1.
</pre>
<h3>Other examples into <code>tests folder</code> that you can preview for testing: login, register, show profile,...</h3>
<ul>
<li>http://code.tutsplus.com/tutorials/testing-laravel-controllers--net-31456
<li>https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.test-dependencies
</ul>
