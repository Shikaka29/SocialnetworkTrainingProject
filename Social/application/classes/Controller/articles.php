<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Articles extends Mycontroller {

    public $template = "basic";
    public function action_index()
    {
        $content = View::factory('article');
        $this->template->content = $content;
    }

    public function action_article()
    {
        $id = $this->request->param('id');

        $content = View::factory('article')
            ->bind('article', $article)
            ->bind('comments', $comments);

        $article = Model::factory('Article')->get_article($id);

        $comments_url = 'comments/' . $id;
        $comments = Request::factory($comments_url)->execute();

        $this->template->content = $content;
    }

} // Articles