<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller {

    public function before()
    {
        if($this->request->is_initial())
        {
            throw new HTTP_Exception_404('File not found!');
        }
    }


    public function action_index()
    {
        $news = new Model_News();
        $data2['contentNews'] = $news->get3news();

        $this->response->body(View::factory('newsview', $data2));
    }



}