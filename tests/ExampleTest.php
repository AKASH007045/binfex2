<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

	/** @test */
	function an_unauthorized_user_cannot_see_home()
	{
		$this->call('GET', '/home');
		$this->assertRedirectedTo('/auth/login');
	}

}
