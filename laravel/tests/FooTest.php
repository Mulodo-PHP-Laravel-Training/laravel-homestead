<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class FooTest extends TestCase {
	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testSomethingIsTrue() {
		$this->assertTrue(true);
	}
	
	/**
	 * Calling A Route From A Test
	 *
	 * @return void
	 */
	public function testCallRoute() {
		//$response = $this->call('GET', 'routing');
		//$response = $this->action('GET', 'UserController@getIndex');
		
		// The getContent method will return the evaluated string contents of the response. 
		//If your route returns a View, you may access it using the original property.
		$response = $this->action('GET', 'UserController@showProfileUT', ['id' => 1]);
		$view = $response->original;
		$this->assertEquals('Anna', $view['first_name']);
		// Using this command when your returned content is plain text.
		//$this->assertEquals('Content', $response->getContent());
	}
}
