<?php defined('SYSPATH') or die('No direct script access.');

class Model_Myuser extends ORM
{
    protected $_table_name = 'users';

    protected $errors = array();

    public function rules()
    {
        return array(
            'username' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
                array(array($this, 'username_unique'))
            ),
            'password' => array(
                array('not_empty'),
            ),
            'email' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 127)),
                array('email'),
                array(array($this, 'email_unique')))
        );
    }
    public function images()
    {
        return array(
            'user' . DIRECTORY_SEPARATOR . '100_100' => array(
                'width' => 100,
                'height' => 100,
                'quality' => 100,
                'crop' => TRUE,
                'master' => Image::INVERSE,
            ),
            'user' . DIRECTORY_SEPARATOR . '300_300' => array(
                'width' => 300,
                'height' => 300,
                'quality' => 85,
                'master' => Image::AUTO,
            ),
            'user' . DIRECTORY_SEPARATOR . 'full' => array(),
        );
    }
    /*
        public function username_unique($username)
    {
        $usertemp = ORM::factory('myuser',array('username'=>$username));
        if($usertemp->loaded())
        {
            return false;
        }
        else
        {
            return true;
        }
    }


        public function email_unique($email)
        {
            $usertemp = ORM::factory('myuser',array('email'=>$email));
            if($usertemp->loaded())
            {
                return false;
            }
            else
            {
                return true;
            }
        }

    */
        /**
         * @param $username
         * @return bool
         * @throws Kohana_Exception
         */


    public function email_unique($email)
    {
        $db = Database::instance();

        if ($this->id)
        {
            $query = 'SELECT id FROM users WHERE id != '.$this->id.' AND email = '.$db->escape($email);
        }
        else
        {
            $query = 'SELECT id FROM users WHERE email = '.$db->escape($email);
        }

        $result = $db->query(Database::SELECT, $query, FALSE)->as_array();
        if (count($result) > 0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }


    public function username_unique($username)
    {
        $db = Database::instance();

        if ($this->id)
        {
            $query = 'SELECT id FROM users WHERE id != '.$this->id.' AND username = '.$db->escape($username);
        }
        else
        {
            $query = 'SELECT id FROM users WHERE username = '.$db->escape($username);
        }

        $result = $db->query(Database::SELECT, $query, FALSE)->as_array();
        if (count($result) > 0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    public function displayusername2($userId)
    {
        $auth = Auth::instance();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->username;
    }
    public function displayuseremail2($userId)
    {
        $auth = Auth::instance();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->email;
    }
    public function displayfirstname2($userId)
    {
        $auth = Auth::instance();


        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->first_name;
    }
    public function displaylastname2($userId)
    {
        $auth = Auth::instance();


        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->last_name;
    }
    public function displaymiddlename2($userId)
    {
        $auth = Auth::instance();


        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->middle_name;
    }
    public function displaycity2($userId)
    {
        $auth = Auth::instance();


        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->city;
    }
    public function displayinterests2($userId)
    {
        $auth = Auth::instance();


        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->interests;
    }
    public function displaywebsite2($userId)
    {
        $auth = Auth::instance();


        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->website;
    }

    public function displayicq2($userId)
    {
        $auth = Auth::instance();


        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->icq;
    }
    public function displayabout2($userId)
    {
        $auth = Auth::instance();


        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->about;
    }

    public function displayavatar2($userId)
    {
        $auth = Auth::instance();


        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->avatar;
    }

    public function displayid($userId)
    {
        $auth = Auth::instance();


        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->id;
    }





    public function displayusername()
    {
        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->username;
    }
    public function displayuseremail()
    {
        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->email;
    }
    public function displayfirstname()
    {
        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->first_name;
    }
    public function displaylastname()
    {
        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->last_name;
    }
    public function displaymiddlename()
    {
        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->middle_name;
    }
    public function displaycity()
    {
        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->city;
    }
    public function displayinterests()
    {
        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->interests;
    }
    public function displaywebsite()
    {
        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->website;
    }

    public function displayicq()
    {
        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->icq;
    }
    public function displayabout()
    {
        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->about;
    }

    public function displayavatar()
    {
        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));

        return $usertemp->avatar;
    }


    public function checkOldPass($oldpass)
    {
        $auth = Auth::instance();
        return $auth->check_password($oldpass);
    }

    public function saveNewPass($oldpass, $newpass1, $newpass2)
    {
        $vData = array("oldpass" => $oldpass, "newpass1" => $newpass1, "newpass2" => $newpass2,);

        $validation = Validation::factory($vData);
        $validation->rule('oldpass', 'not_empty');
        $validation->rule('oldpass', 'alpha_numeric');
        $validation->rule('oldpass', array($this, 'checkOldPass'));
        $validation->rule('newpass1', 'not_empty');
        $validation->rule('newpass1', 'alpha_numeric');
        $validation->rule('newpass1', 'matches', array(':validation', 'newpass1', 'newpass2'));

        if(!$validation->check())
        {
            $this->errors = $validation->errors('catErrors');
            return FALSE;
        }

        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));
        $usertemp->password = $auth->hash($newpass1);
        $usertemp->save();

        return TRUE;
    }

    public function saveNewAvatar($avatar)
    {
        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));
        $usertemp->avatar = $avatar;
        $usertemp->save();

        return TRUE;
    }

    public function saveNewProfileData($first_name, $last_name, $middle_name,$city,$interests,$about, $icq)
    {
        $vData = array("first_name" => $first_name, "last_name" => $last_name, "middle_name" => $middle_name,"city" => $city, "interests" => $interests, "about" => $about,"icq"=>$icq);

        $validation = Validation::factory($vData);
        $validation->rule('first_name', 'not_empty');


        $validation->rule('last_name', 'not_empty');


        $validation->rule('middle_name', 'not_empty');


        $validation->rule('city', 'not_empty');


        $validation->rule('interests', 'not_empty');


        $validation->rule('about', 'not_empty');



        $validation->rule('icq', 'not_empty');


        if(!$validation->check())
        {
            $this->errors = $validation->errors('catErrors');
            return FALSE;
        }

        $auth = Auth::instance();
        $userId = $auth->get_user();

        $usertemp = ORM::factory('myuser', array('id'=>$userId));
        $usertemp->first_name = $first_name;
        $usertemp->last_name = $last_name;
        $usertemp->middle_name = $middle_name;
        $usertemp->city = $city;
        $usertemp->interests = $interests;
        $usertemp->about = $about;
        $usertemp->icq = $icq;
        $usertemp->save();

        return TRUE;
    }

    public function getErrors()
    {
        return $this->errors;
    }


}
