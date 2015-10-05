<?php defined('SYSPATH') or die('No direct script access.');

$messages = array(
    'name'   =>
        array(
            'not_empty'       => ':field must not be empty',
        ),
    'email'  =>
        array(
            'not_empty'       => ':field must not be empty',
            'max_lenght'   => ':field must not exceed :param2 characters long',
            'email'        => ':field not email address'
        ),
    'sex' =>
        array(
            'not_empty'       => ':field must not be empty',
        ),
    'type_error'   =>
        array(
            'regex'     => ':field does not match the required format',
        ),
    'descr'  =>
        array(
            'not_empty'       => ':field must not be empty',
        ),
    'img' =>
        array(
            'Upload::not_empty' => ':field must not be empty',
            'Upload::type' => ':filed is not allowed file type',
        ),

    'captcha'   =>
        array(
            'Captcha::valid'=> ':field captcha not valid'
        ),
);

return $messages;