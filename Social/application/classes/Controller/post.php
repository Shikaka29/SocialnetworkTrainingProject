<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Post extends Mycontroller
{

    public $template = "basic";

    /**
     * Users List Action
     */
    public function action_posts()
    {
        // Load model
        $posts                            = new Model_Post();

        // Setup view stuff
        $ko3                              = array();
        $this->template->title            = 'Kohana 3.0 Model Test';
        $this->template->meta_keywords    = 'PHP, Kohana, KO3, Framework, Model';
        $this->template->meta_description = 'A test of of the KO3 framework Model';
        $this->template->styles           = array();
        $this->template->scripts          = array();
        $ko3['msg']                       = "";

        // Handle POST
        if($_POST)
        {
            $ret = $this->_addPost((isset($_POST['title']) ? $_POST['title'] : ""),
                (isset($_POST['post']) ? $_POST['post']  : ""));

            if(isset($ret['error']))
            {
                $ko3['msg'] = $ret['error'];
            }
            else
            {
                $ko3['msg'] = 'Saved.';
            }
        }

        // Get the last 10 posts
        $ko3['posts']                     = $posts->getLastTenPosts();

        // Display it.
        $this->template->content          = View::factory('posts', $ko3);
    }

    private function _addPost($title, $post_content)
    {
        // Load model
        $post = new Model_Post();

        // Check required fields
        if(empty($title))
        {
            return(array('error' => 'Please enter a title.'));
        }
        elseif(empty($post_content))
        {
            return(array('error' => 'Please enter a post.'));
        }

        // Add to DB
        $post->addPost($title, $post_content);
        return TRUE;
    }


}