<?php

class HomeController extends Webarq\Site\Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getIndex()
	{
		$this->layout->pageTitle = 'Home';
		$this->layout->content = View::make('home');
	}

	// An example of AJAX method returning a JSON response
	public function getAjax()
	{
		return $this->ajaxResponse = array('foo' => 'bar', 'hello' => 'world');
	}

}