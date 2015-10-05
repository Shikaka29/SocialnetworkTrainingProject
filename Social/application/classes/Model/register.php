<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register {



	public function reg($username,$email,$password,$role)
	{
		$Myuser = new Model_Myuser();
		$addrole = new Model_Addrole();
		// Создаем пользователя.

		$Myuser->username=$username;
		$Myuser->email = $email;
		$Myuser->password =$password;

		$auth = Auth::instance();
		$Myuser->password = $auth->hash($password);

		$usertemp=ORM::factory('user',array('username'=>$email));
		$adduserid=$usertemp->id;
		$roleid=1;
		$addrole->user_id=$adduserid;
		$addrole->role_id= $role;



		try {
			$query = DB::insert('roles_users', array('user_id', 'role_id'))->values(array($adduserid, '1'));

			$Myuser->save();


			$email = Email::factory('Регистрация в соц.сети.', "вы были зарегистрированы Ваш логин $username Ваш пароль $password")
				->to($email)
				->from('socialnet2015@gmail.com', 'socialnet2015@gmail.com')
				->send()
			;

						//отправка эл почты.
			//$from='MySocialNetwork2015@mail.ru';
			//$subject='Регистрация в социальной сети';
			//$message="Ваш логин:$username  Ваш пароль:$password";
			//$useful->sendemail($email, $from, $subject, $message);

		}

		catch(ORM_Validation_Exception $e)
		{
			$this->errors = $e->errors('validation');
			return FALSE;
		}




		return TRUE;
	}

	public function CreateNewPassword($email)
	{
		$usertemp = ORM::factory('myuser', array('email'=>$email)); //передача в переменну. строки из базы данных где email совпадают.

		if(!$usertemp->loaded())
		{
			return FALSE;
		}

		$useful = new Model_Useful();
		$genpass = $useful->generatePassword(18); //генерация нового пароля пользователю

		$usertemp->rempass = $genpass;
		$usertemp->save(); //сохранение нового пароля в базе данных

		//Отправка эл. почты

		$subject=Kohana::message('reg','subject');
		$data=array('genpass'=>$genpass);

		$email = Email::factory($subject, '')
		->to($email)
		->message("Для восстановления пароля перейдите по ссылке <a href='http://Social/auth/checkcode/$genpass'>http://Social/auth/checkcode/$genpass</a>", 'text/html')
		->from('socialnet2015@gmail.com', 'socialnet2015@gmail.com')
		->send()
	;

		return TRUE;
	}

	public function resetpassword($code)
	{
		$usertemp = ORM::factory('myuser', array('rempass' => $code));


		if (!$usertemp->loaded())
		{
			return FALSE;
		}
		else
		{
			$useful = new Model_Useful();
			$genpass = $useful->generatePassword(8);

			//Хеширование пароля
			$auth = Auth::instance();
			$usertemp->password = $auth->hash($genpass);

			//Очистка кода восстановления
			$usertemp->rempass = NULL;

			$usertemp->save();

			//Отправка эл. почты
			$email = $usertemp->email;
			$login = $usertemp->username;


			$subject=Kohana::message('reg','subject');
			$email = Email::factory($subject, '')
				->to($email)
				->message("Ваши обновленные данные: Login:$login  Password:$genpass ")
				->from('socialnet2015@gmail.com', 'socialnet2015@gmail.com')
				->send();

			return TRUE;

		}
	}
}
