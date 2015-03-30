<?php

class HomeController extends Webarq\Site\Controller {

	public function getIndex()
	{
		if (Input::get('userId'))
			Auth::loginUsingId(Input::get('userId'));
		
		if (Input::get('logout'))
			Auth::logout();

		if (Input::get('userId') || Input::get('logout'))
			return Redirect::back();

		$this->layout->pageTitle = 'Home';
		$this->layout->content = View::make('home');
	}

}