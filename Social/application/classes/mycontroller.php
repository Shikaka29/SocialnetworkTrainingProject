<?php defined('SYSPATH') or die('No direct script access.');

class Mycontroller extends Controller_Template {



	public function before()
	{




		$auth = Auth::instance();
		if($auth->logged_in()==0) Controller::redirect('auth');
		if($auth->logged_in()==1)
			{
		$userid = Auth::instance()->get_user()->id;
			View::set_global('userid', $userid);
		}
		return parent::before();
	}


}
