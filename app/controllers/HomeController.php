<?php

class HomeController extends Webarq\Site\Controller {

	public function getIndex()
	{
		if (Input::get('userId'))
			Auth::loginUsingId(Input::get('userId'));
		
		if (Input::get('logout'))
			Auth::logout();

		$this->layout->pageTitle = 'Home';
		$this->layout->content = View::make('home');
	}

}