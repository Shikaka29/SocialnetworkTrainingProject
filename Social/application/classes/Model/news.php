<?php defined('SYSPATH') or die('No direct script access.');

class Model_News
{
    public function get3news()
    {
        return DB::select()
            ->from('news')
            ->limit('3')
            ->execute()
            ->as_array();
    }
}