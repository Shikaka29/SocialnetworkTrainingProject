<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Admin_Users extends Mycontrolleradmin{

    public $template = 'basic';

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
        $this->template->set('content', View::factory('admin/users/adminlist', array(
            'items' => $users,
        )));


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
        $this->template->set('content', View::factory('admin/users/edit', array(
            'item' => array_merge($user->as_array(), $item),
            'roles' => $roles,
        )));
    }

    public function action_profile()
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
        $this->template->set('content', View::factory('profile', array(
            'item' => array_merge($user->as_array(), $item),
            'roles' => $roles,
        )));
    }

    public function action_myprofile()
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
        $this->template->set('content', View::factory('basic', array(
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
        $post = $this->request->post();
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

            // update user
            $user = ORM::factory('user')->create_user($_POST, array('username', 'email', 'password'));
            $user->add('roles', ORM::factory('role', array('name' => 'login')));



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
        $this->template->set('content', View::factory('admin/users/adminlist' . (Arr::get($post->data(), 'id') ? 'edit' : 'new'),
            array(
                'item' => $post->data(),
                'roles' => $roles,
            )
        ));
    }
} // End Admin Users