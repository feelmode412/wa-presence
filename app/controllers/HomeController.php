<?php

class HomeController extends Webarq\Site\Controller {

	public function getIndex()
	{
		$this->layout->pageTitle = 'Home';
		$this->layout->content = View::make('home');
	}

}