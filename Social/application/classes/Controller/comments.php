<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Comments extends Controller {
    public $template = "basic";
    public function action_index()
    {
        if($this->request->is_initial())
            Request::initial()->redirect(URL::site(''));

        $myuser=new Model_Myuser();
        $username = $myuser->displayusername();
        $article_id = $this->request->param('id');

        $content = View::factory('comments')
            ->bind('comments', $comments)
            ->bind('username',$username);

        if($_POST)
        {
            $user =  $myuser->displayusername();
            $message = Arr::get($_POST, 'message');

            Model::factory('Comment')->create_comment($article_id, $user, $message);
        }

        $comments = Model::factory('Comment')->get_comments($article_id);
        $this->response->body($content);
    }

} // Comments