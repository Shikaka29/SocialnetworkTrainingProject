<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Avatar extends Controller {

    public $template = 'basic';

    public function action_index()
    {
        $view = View::factory('avatar/index');
        $this->response->body($view);
    }

    public function action_upload()
    {
        $user=new Model_User();
        $id=$this->request->param('id');
        $view = View::factory('avatar/upload');
        $error_message = NULL;
        $filename = NULL;

        if ($this->request->method() == Request::POST)
        {
            if (isset($_FILES['avatar']))
            {
                $filename = $this->_save_image($_FILES['avatar'], Auth::instance()->get_user()->id);
                // $image_path = realpath(Upload::$default_directory).DIRECTORY_SEPARATOR.$filename;
                // $user = ORM::factory( 'user', 10 );
                // $filename = $user->add_image( $image_path, 'avatar' );
            }
        }

        if ( ! $filename)
        {
            $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file.';
        }

        $view->uploaded_file = $filename;
        $view->error_message = $error_message;
        $this->response->body($view);
        Controller::redirect("account");
    }

    protected function _save_image($image, $user_id)
    {
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }

        $directory = DOCROOT.'uploads';

        if ($file = Upload::save($image, NULL, $directory))
        {
            // $filename = strtolower(Text::random('alnum', 20)).'.jpg';
            $filename = $user_id.'.jpg';

            Image::factory($file)
                ->resize(200, 200, Image::AUTO)
                ->save($directory.$filename);

            // Delete the temporary file
            unlink($file);

            return $filename;

        }


        return FALSE;

    }

}