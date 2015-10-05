<?php defined('SYSPATH') or die('No direct script access.');

class Mycontroller2 extends Controller_Template {



	public function before()
	{

		$auth = Auth::instance();
		if($auth->logged_in()==0) Controller::redirect('auth');
		return parent::before();
	}


}
