<?php defined('SYSPATH') OR die('No direct access allowed.');

class User_Detail_Model extends ORM {

    // Relationships
    protected $has_one = array('user');

    protected $primary_key = 'user_id';

    /**
     * Validates and optionally saves a new user record from an array.
     *
     * @param  array    values to check
     * @param  boolean  save the record when validation succeeds
     * @return boolean
     */
    public function validate(array & $array, $save = FALSE)
    {
        $array = Validation::factory($array)
            ->pre_filter('trim')
            ->add_massive_rules(array('first_name', 'last_name', 'middle_name'),
                'length[2,127]', 'chars[\pL -\']')
            ->add_massive_rules(array('interests', 'city'), 'length[2,127]', 'standard_text')
            ->add_rules('website', 'url', 'length[2,127]')
            ->add_rules('icq', 'length[2,10]', 'chars[\pN-]')
            ->add_rules('about', 'length[2,255]', 'standard_text')
            ->add_rules('jabber', 'length[2,127]', 'email');
        return parent::validate($array, $save);
    }



}
