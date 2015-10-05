<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Allusers extends Mycontroller {

    public $template = "basic";

    /**
     * Users List Action
     */
    public function action_index()
    {
        // Load users list query
        $users = ORM::factory('user')
            ->reset(FALSE);



        // Modify users list query
        $users = $users
            ->order_by('username', 'ASC')
            ->order_by('email', 'ASC')
            ->find_all();

        // Set content template
        $this->template->set('content', View::factory('admin/users/list', array(
            'items' => $users,
        )));


    }

    public function action_search()
    {
        $data=array();
        $Searchuser = new Model_Searchuser();
        if(isset($_POST['SearchGo'])) //если нажата кнопка "поиск"
        {
            $SearchUsername = Security::xss_clean(Arr::get($_POST, 'username', '')); //передача в переменную введеного имени пользователя.

            if($names=$Searchuser->find($SearchUsername)and($SearchUsername<>""))// в переменную names записываются все результаты метода find поиска совпадений.
            {
                //передача на форму всех найденых значений.
                $data['name']= $names;
                $data['findok'] = "";
            }
            else
            {
                //вывод, что никого не нашел.
                $data["findno"] = "";
            }
        }
        $data['usercount']=$Searchuser->usercount();
        $data['admincount']=$Searchuser->admincount();
        $this->template->content = View::factory('search', $data);
    }


    /**
     * Delete user action
     */
    public function action_delete()
    {
        // Get user id
        $user_id = $this->request->param('id');
        if (!$user_id)
        {
            throw new HTTP_Exception_404('User not found.');
        }

        // Get user
        $user = ORM::factory('user', $user_id);
        if (!$user->loaded())
        {
            throw new HTTP_Exception_404('User not found.');
        }

        // Set message
        Session::instance()
            ->set('message', __('User :user deleted successfully.', array(':user' => $user->username)))
            ->set('message_type', 'success');

        // Delete user
        $user->delete();

        // Redirect to base page
       Controller::redirect($this->request->referrer());
    }

    public function action_profile()
    {
        $myuser=new Model_Myuser();
        $username = $myuser->displayusername();



            $article_id = $this->request->param('id');

        //add articles
        // Load model
        $posts                            = new Model_Post();
        // Setup view stuff
        $ko3                              = array();
        $ko3['msg']                       = "";
        // (isset($_POST['alt_title']) ? $_POST['alt_title']  : ""),
        // Handle POST


        // Get the last 10 posts
        $ko3['posts']                     = $posts->getLastTenPosts();

        // Display it.
        $this->template->content          = View::factory('profile', $ko3);



        //articles


        //

        // Get user id
        $user_id = $this->request->param('id');
        if (!$user_id)
        {
            throw new HTTP_Exception_404('User not found.');
        }

        // Get user
        $user = ORM::factory('user', $user_id);

        if (!$user->loaded())
        {
            throw new HTTP_Exception_404('User not found.');
        }

        $email = $myuser->displayuseremail2($user_id);
        $first_name = $myuser->displayfirstname2($user_id);
        $last_name = $myuser->displaylastname2($user_id);
        $middle_name = $myuser->displaymiddlename2($user_id);
        $city = $myuser->displaycity2($user_id);
        $about = $myuser->displayabout2($user_id);
        $interests = $myuser->displayinterests2($user_id);
        $icq = $myuser->displayicq2($user_id);
        $user_id = $myuser->displayid($user_id);
        // User roles
        $item['roles'] = array();
        foreach ($user->roles->find_all() as $role)
        {
            $item['roles'][] = $role->id;

        }

        //принимает значения со страницы блога.
        if($_POST)
        {
            //записывает в базу данных данные о новой записи.
            $ret = $this->_addPost((isset($_POST['title']) ? $_POST['title'] : ""),
                ($_POST['alt_title'] = $_POST['title']),
                (isset($_POST['author']) ? $_POST['author']  : ""),
                (isset($_POST['content_short']) ? $_POST['content_short']  : ""),
                (isset($_POST['content_full']) ? $_POST['content_full']  : ""),
                ($userid=$user_id)) ;

            if(isset($ret['error']))
            {
                $ko3['msg'] = $ret['error'];
            }
            else
            {
                $ko3['msg'] = 'Saved.';
            }
        }


        $articles = array();

        $content = View::factory('profile')
            ->bind('articles', $articles)
            ->bind('data',$data);

        $article = new Model_Article();
        $articles = $article->get_all($user_id);

        $this->template->content = $content;

        // Roles list
        $roles = ORM::factory('role')->order_by('name', 'ASC')->find_all();

        // Set content template
        $this->template->set('content', View::factory('profile', array(
            'item' => array_merge($user->as_array(), $item),
            'roles' => $roles,
           'user_id' => $user_id,
            'articles'=>$articles,
            'username'=>$username,
            'email'=>$email,
            'first_name'=> $first_name,
            'last_name'=> $last_name,
            'middle_name'=>$middle_name,
            'city'=>$city,
            'about'=> $about,
            'interests'=>  $interests,
            'icq'=>  $icq,
            )));


    }


    private function _addPost($title,$alt_title,$author,$content_short,$content_full,$userid)
    {
        // Load model
        $article = new Model_Article();

        // Check required fields
        if(empty($title))
        {
            return(array('error' => 'Please enter a title.'));
        }
        elseif(empty($content_full))
        {
            return(array('error' => 'Please enter a post.'));
        }
        elseif(empty($content_short))
        {
            return(array('error' => 'Please enter a post.'));
        }


        // Add to DB
        $article->addArticle($title, $alt_title,$author,$content_short,$content_full,$userid);

        return TRUE;
    }


    /**
     * Create user action
     */
    public function action_new()
    {
        // New user
        $user = ORM::factory('user');

        // Roles list
        $roles = ORM::factory('role')->order_by('name', 'ASC')->find_all();

        // Set content template
        $this->template->set('content', View::factory('admin/users/new', array(
            'item' => array_merge($user->as_array(), array('roles' => array())),
            'roles' => $roles,
        )));
    }

    /**
     * Edit user action
     *
     * @throws HTTP_Exception_404
     */
    public function action_edit()
    {
        // Get user id
        $user_id = $this->request->param('id');
        if (!$user_id)
        {
            throw new HTTP_Exception_404('User not found.');
        }

        // Get user
        $user = ORM::factory('user', $user_id);
        if (!$user->loaded())
        {
            throw new HTTP_Exception_404('User not found.');
        }

        // User roles
        $item['roles'] = array();
        foreach ($user->roles->find_all() as $role)
        {
            $item['roles'][] = $role->id;
        }

        // Roles list
        $roles = ORM::factory('role')->order_by('name', 'ASC')->find_all();

        // Set content template
        $this->template->set('content', View::factory('account', array(
            'item' => array_merge($user->as_array(), $item),
            'roles' => $roles,
        )));
    }

    /**
     * Save user action
     *
     * @throws HTTP_Exception_404
     */
    public function action_save()
    {
        // Protect page
        if ($this->request->method() !== Request::POST)
        {
            throw new HTTP_Exception_404('Page not found.');
        }

        // Back
        if ($this->request->post('back'))
        {
            Controller::redirect('/admin/users');
        }

        // create and configure form validation
        $post = Validation::factory($this->request->post())
            ->labels(array(
                'username' => __('User name'),
                'email' => __('Email'),
            ))
            ->rule('username', 'not_empty')
            ->rule('email', 'not_empty')
            ->rule('email', 'email');

        if (!empty($post['password']))
        {
            $post
                ->labels(array(
                    'password' => __('Password'),
                    'password_confirm' => __('Password confirm'),
                ))
                ->rule('password', 'not_empty')
                ->rule('password_confirm', 'not_empty')
                ->rule('password_confirm', 'matches', array(':validation', 'password', 'password_confirm'));
        }

        // check validation
        if ($post->check())
        {
            // store
            $data = $post->data();

            /** @var Model_User $user **/
            $user = ORM::factory('user', Arr::get($data, 'id'));

            // remove password if empty
            if (empty($data['password']))
            {
                unset($data['password']);
            }

            // update user
            $user->values($data, array('username', 'email', 'password'))->save();

            // remove all roles
            $user->remove('roles');

            // add new roles
            foreach (Arr::get($post, 'roles', array()) as $role)
            {
                $user->add('roles', $role);
            }

            // message
            Session::instance()
                ->set('message', __(Arr::get($post->data(), 'id') ? 'User updated successfully.' : 'User created successfully.'))
                ->set('message_type', 'success');

            // redirect to list page
            Controller::redirect(URL::site('/admin/users'));
        }

        // Roles list
        $roles = ORM::factory('role')->order_by('name', 'ASC')->find_all();

        // Errors list
        View::set_global('errors', $post->errors('validation'));

        // Set content template
        $this->template->set('content', View::factory('admin/users/' . (Arr::get($post->data(), 'id') ? 'edit' : 'new'),
            array(
                'item' => $post->data(),
                'roles' => $roles,
            )
        ));
    }
} // End Admin Users