<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template
{

	public $template = "basic2";

	public function action_index()
	{

		$request = Request::factory('news');
		$response = $request->execute();
		echo $response;


		$auth = Auth::instance();
		$data = array();

		if ($auth->logged_in()) {
			Controller::redirect('');
		} else {
			if (isset($_POST['enter'])) {
				$username = Arr::get($_POST, 'username', '');
				$password = Arr::get($_POST, 'password', '');

				if ($auth->login($username, $password)) {
					Controller::redirect('account');
				} else {
					$data["error"] = "";
				}
			}
		}


		$this->template->content = View::factory('authview', $data);
	}


	public function action_logout()
	{
		$auth = Auth::instance();
		$auth->logout();
		Controller::redirect('auth');
	}


	public function action_registration()
	{
		$data = array();
		if ($post = $this->request->post()) {
			try {

				$post = Security::xss_clean($this->request->post()); // данные массива $_POST обработанные от XSS
				$valid = new Validation(array_merge($post, $_FILES)); //тут я передаю в валидатору сразу два массива данных $_POST и $_FILES
				$register = new Model_Register();
				// Сохраняем пользователя в БД

				$user = ORM::factory('user')->create_user($_POST, array('username', 'email', 'password'));
				// Выставляем ему роль
				$user->add('roles', ORM::factory('role', array('name' => 'login')));

				// Отправляем письмо пользователю с логином и паролем

				$email = Email::factory('Регистрация в соц.сети.', "вы были зарегистрированы Ваш логин " . $post['username'] . " Ваш пароль " . $post['password'])
					->to($post['email'])
					->from('socialnet2015@gmail.com', 'socialnet2015@gmail.com')
					->send();

			}

			// отлавливаем ошибки.
			catch(Exception $e)
			{
				$errors = $e->errors('validation');
				foreach ($errors as $error){
					echo "Ошибка: ". $error;
				}
			}


		}
		// Выводим шаблон регистрации
		$this->template->content = View::factory('registration', $data);
	}


	public function  action_reg()
	{

		$data = array();
		if (isset($_POST['enter'])) {
			$username = Arr::get($_POST, 'username', '');
			$email = Arr::get($_POST, 'email', '');
			$password = Arr::get($_POST, 'password', '');
			$role=1;
			// $password_confirm = Arr::get($_POST, 'password_confirm','');
			$addrole=new Model_Addrole();
			$register = new Model_Register();
			if ($register->reg($username, $email, $password,$role)) {
				$data["succes"] = "";

			} else {
				$data["errors"] = $register->errors;
			}


		}


		$this->template->content = View::factory('regview', $data);
	}

	public function action_RememberPassword()
	{
		$data = array();

		if (isset($_POST['enter2'])) {   //если нажата кнопка восстановления пароля.

			$email = Arr::get($_POST, 'email', ''); // принимает почту пользователя, которую он вписал

			$register = new Model_Register();

			if ($register->CreateNewPassword($email)) { //если вписаная почта проходит по всем параметрам
				$data["ok"] = ""; //выводит сообщение об отправке письма на почту.
			} else {
				$data["error"] = ""; //выдает ошибку
			}
		}
		$this->template->content = View::factory('rempassview', $data);
	}

	public function action_checkcode()
	{
		$code = $this->request->param('id');
		$data = array();


		$register = new Model_Register();
		if ($register->resetpassword($code)) {
			$data["ok"] = "";
		} else {
			$data["error"] = "";
		}
		$this->template->content = View::factory('checkcodeview', $data);
	}


}



class Controller_Bootstrap extends Controller_Template {
	// Указываем шаблон по умолчанию
	public $template = 'basic';
	public function action_index()
	{

	}
}
