<?php defined('SYSPATH') or die('No direct script access.');

class Mycontrolleradmin extends Controller_Template {



	public function before()
	{
		$userid = Auth::instance()->get_user()->id;
		View::set_global('userid', $userid);
		$auth = Auth::instance();
		if($auth->logged_in()==0) Controller::redirect('auth');
		if($auth->logged_in('admin')==0) Controller::redirect('netprav');
		if($auth->logged_in('admin')==0) Controller::redirect('netprav');
		return parent::before();
	}


}
