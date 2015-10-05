<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Account extends Mycontrollerlogin {

    public $template = 'basic';

    public function action_index()
    {
        $data = array();
        $data2=array();
        $myuser = new Model_Myuser();
        $data['user_id'] = Auth::instance()->get_user()->id;
        $data['username'] = $myuser->displayusername();
        $data['email'] = $myuser->displayuseremail();
        $data['first_name'] = $myuser->displayfirstname();
        $data['last_name'] = $myuser->displaylastname();
        $data['middle_name'] = $myuser->displaymiddlename();
        $data['city'] = $myuser->displaycity();
        $data['about'] = $myuser->displayabout();
        $data['interests'] = $myuser->displayinterests();
        $data['icq'] = $myuser->displayicq();
        $data['avatar'] = $myuser->displayavatar();

        if(isset($_POST['enteravatar']))
        {
            $id = $this->request->param('id');
            $avatar=arr::get($_POST,'file','');
            if($myuser->saveNewAvatar(($avatar)))
            {
                $data['newpassok'] = '';
            }
            else
            {
                $data['errors'] = $myuser->getErrors();
            }
        }

        $id = $this->request->param('id');
        if(isset($_POST['btnsubmit']))
        {
            $oldpass = Arr::get($_POST, 'oldpass', '');
            $newpass1 = Arr::get($_POST, 'newpass1', '');
            $newpass2 = Arr::get($_POST, 'newpass2', '');

            if($myuser->saveNewPass($oldpass, $newpass1, $newpass2))
            {
                $data['newpassok'] = '';
            }
            else
            {
                $data['errors'] = $myuser->getErrors();
            }
        }

        if(isset($_POST['enter3'])) // если нажали кнопку в личном кабинете ловим данные
        {
            $first_name =   Arr::get($_POST, 'first_name', ''); // переменной присваевается значение прописанное в поле.
          $last_name =  Arr::get($_POST, 'last_name', '');
          $middle_name =  Arr::get($_POST, 'middle_name', '');
          $city =       Arr::get($_POST, 'city', '');
         $interests =  Arr::get($_POST, 'interests', '');
          $about =       Arr::get($_POST, 'about', '');

          $icq =      Arr::get($_POST, 'icq', '');

            //проверка, если все вписано то ошибок не вывыодим
            if($myuser->saveNewProfileData($first_name, $last_name, $middle_name,$city,$interests,$about, $icq))
            {
                $data['ok'] = '';
            }
            else
            {
                // иначе выводим ошибки
                $data['errors'] = $myuser->getErrors();
            }
        }

        $this->template->content =  View::factory('accountview', $data,$data2);
    }

}