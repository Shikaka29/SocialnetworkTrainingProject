<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Friends extends Mycontroller {

	public $template = 'basic';

	public function action_index()
	{
		if (Auth::instance()->logged_in())
		{
			$friends = Model::factory('friends')->get_friends();

			$this->template->content = View::factory('friends')
				->bind('friends', $friends);
		}
		else
		{
			Controller::redirect('auth');
		}
	}

	public function action_add()
	{
		$user_id = (int) $this->request->param('id');
		$user    = ORM::factory('user', $user_id);

		if ( ! $user_id AND ! $user->loaded())
		{
			throw new HTTP_Exception_404('User not found.');
		}

		try {
			Model::factory('friends')->add_friend($user_id);

			Session::instance()
				->set('message', __('User :user is your friend.', array(':user' => $user->username)))
				->set('message_type', 'success');

			// Redirect to base page
			Controller::redirect($this->request->referrer());
		}
		catch (Database_Exception $e)
		{
			Session::instance()
				->set('message', __('User :user is already your friend.', array(':user' => $user->username)))
				->set('message_type', 'error');

			// Redirect to base page
			Controller::redirect($this->request->referrer());
		}
	}

}