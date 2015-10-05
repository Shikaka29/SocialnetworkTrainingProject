<?php defined('SYSPATH') or die('No direct script access.');

class Mycontrollerlogin extends Controller_Template {



	public function before()
	{
		$userid = Auth::instance()->get_user()->id;
		View::set_global('userid', $userid);
		$auth = Auth::instance();
		if($auth->logged_in()==0) Controller::redirect('auth');
		return parent::before();
	}


}
