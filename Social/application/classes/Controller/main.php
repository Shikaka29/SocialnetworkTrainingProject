<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Mycontroller {

	public $template = "basic";


	public function action_index()
	{
		$user_id = Auth::instance()->get_user()->id;
		View::set_global('user_id', $user_id);
		$this->template->content = View::factory('basic')
			->bind('user_id', $user_id);
		$this->template->content = View::factory('home');

	}

}
