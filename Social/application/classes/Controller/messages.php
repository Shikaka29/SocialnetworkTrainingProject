<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Messages extends Mycontroller {

	public $template = 'basic';

	public function action_history()
	{
		if (Auth::instance()->logged_in())//если пользователь залогинен.
		{
			$user_id = (int) $this->request->param('id'); //берем айди пользователя.
			$user    = ORM::factory('user', $user_id); // записываем в user всю строчку где нашлось совпадение в базе по айди.

			if ( ! $user_id AND ! $user->loaded())
			{
				throw new HTTP_Exception_404('User not found.');
			}

			$messages = Model::factory('messages')->get_messages($user_id); // в переменную messages записываем результат выполнения метода get_messages.

			$this->template->content = View::factory('messages') //передача данных в форму.
				->bind('messages', $messages)
				->bind('user', $user);

			if ($this->request->method() == HTTP_Request::POST) //если сообщение дошло до пользователя
			{
				if (Model::factory('messages')->send($this->request->post('to_id'), $this->request->post('message')))
				{
					Controller::redirect($this->request->referrer()); //перезагружаем форму.
				}
			}
		}
		else
		{
			Controller::redirect('auth');
		}
	}

}