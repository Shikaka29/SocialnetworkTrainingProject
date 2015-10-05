<?php defined('SYSPATH') or die('No direct script access.');
class Model_allusers extends ORM
{

    public function get_users(array $roles)
    {
        $users = DB::select(array($this->_has_many['roles']['foreign_key'], 'id'))
            ->distinct(TRUE)
            ->from($this->_has_many['roles']['through'])
            ->where($this->_has_many['roles']['far_key'], 'IN', DB::expr('('.implode(',', $roles).')'))
            ->execute($this->_db);
        if (count($users) == 0)
        {
            // return empty list
            return array();
        }
        // now we need only IDs from result
        $ids = array();
        foreach($users as $columns)
        {
            $ids[] = $columns['id'];
        }
        // load users by id
        return $this->where($this->_primary_key, 'IN', DB::expr('('.implode(',', $ids).')'))->find_all();
    }


}

