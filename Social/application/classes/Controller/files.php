<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Files controller class
 *
 * @author     Novichkov Sergey(Radik) <novichkovsergey@yandex.ru>
 * @copyright  Copyrights (c) 2012 Novichkov Sergey
 */
class Controller_Files extends Mycontroller {

    /**
     * @var View
     */
    public $template = 'basic';

    /**
     * View all tree action
     */
    public function action_index()
    {
        // set values to template
        $data=array(
            // files list
            'files' => ORM::factory('File')->find_all(),

            // errors from user session
            'errors' => Session::instance()->get_once('errors', array()),

            // message from user session
            'message' => Session::instance()->get_once('message'),
        );
        $this->template->content =  View::factory('files',$data);
    }

    /**
     * Upload file action
     */
    public function action_upload()
    {
        $filename=NULL;
        // check request method
        if ($this->request->method() === Request::POST)
        {
            $file = ORM::factory('File')->values(Arr::merge($_FILES, $this->request->post()));

            // try upload and save file and file info
            try
            {

                // save
                $file->save();

                // set user message
                Session::instance()->set('message', 'File is successfully uploaded');
            }
            catch (ORM_Validation_Exception  $e)
            {
                // prepare errors
                $errors = $e->errors('upload');
                $errors = Arr::merge($errors, Arr::get($errors, '_external', array()));

                // remove external errors
                unset($errors['_external']);

                // set user errors
                Session::instance()->set('errors', $errors);
            }
        }

        // redirect to home page
        Controller::redirect('/files/index');
    }

} // End Controller Files