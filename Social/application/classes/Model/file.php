<?php defined('SYSPATH') or die('No direct script access.');

class Model_File extends ORM {

    /**
     * Table columns
     *
     * Field name => Label
     *
     * @var array
     */
    protected  $_table_columns = array(
        'id'            => 'id',
        'file'          => 'file',
        'type'          => 'type',
        'size'          => 'size',
        'description'   => 'description',
    );

    /**
     * Label definitions for validation
     *
     * @return array
     */
    public function labels()
    {
        return array(
            'file'        => 'File',
            'description' => 'Description',
        );
    }

    /**
     * Filter definitions for validation
     *
     * @return array
     */
    public function filters()
    {
        return array(
            TRUE => NULL,
            'description', array(
                array('trim'),
            ),
        );
    }

    /**
     * Rule definitions for validation
     *
     * @return array
     */
    public function rules()
    {
        return array(
            'file' => array(
                array('Upload::valid'),
                array('Upload::not_empty'),
                array('Upload::type', array(':value', array('jpg', 'jpeg', 'png', 'gif', 'zip', 'pdf', 'doc', 'docx', 'xls'))),
                array(array($this, 'file_save'), array(':value'))
            ),
        );
    }

    /**
     * Uploads directory
     *
     * @return string
     */
    private function uploads_dir()
    {
        return DOCROOT . 'uploads' . DIRECTORY_SEPARATOR;
    }

    /**
     * Upload file in upload directory and setup valid filename
     *
     * @param array $file
     *
     * @return boolean
     */
    public function file_save($file)
    {
        // upload file
        $uploaded = Upload::save($file, $file['name'], $this->uploads_dir());

        // if uploaded set file name to save to database
        if ($uploaded)
        {
            // set file name
            $this->set('file', $file['name']);

            // set file type
            $this->set('type', strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)));

            // set file size
            $this->set('size', $file['size']);
        }

        // return result
        return $uploaded;
    }

} // end Model File class