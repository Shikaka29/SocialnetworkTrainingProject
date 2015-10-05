<?php defined('SYSPATH') OR die('No direct access allowed.');

class Web_Controller extends Controller_Template {
    public $template = 'basic';
    public $user = FALSE;

    public function __construct() {
        parent::before();
        $this->template->login = 'test';
        if(!Auth::instance()->logged_in('login')) {
            $this->template->login = new View('header/guest');
        }
        else {
            $this->user = $_SESSION['auth_user'];
            $this->template->login = new View('header/logged');
            $this->template->login->login = $this->user->username;
        }
        $this->template->menus = array
        (
            array
            (
                'title'   =>  'Главная страница блога',
                'link'    =>  url::base(FALSE).'blog/',
            ),
        );
    }

}

