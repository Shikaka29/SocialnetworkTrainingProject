<?php defined('SYSPATH') or die('No direct script access.');
class Model_Searchuser
{
    public function find($SearchUsername)
    {
        $query = DB::select('username')
            ->from('users')
            ->where('username', 'like', ('%'.Security::xss_clean($SearchUsername)).'%');
        $result = $query->execute()->as_array();
        return $result;
    }
    public function usercount()
    {
        $result = DB::select('id')
            ->from('users')
            ->execute();
        return count($result);
    }
    public function admincount()
    {
        $result = DB::select('role_id')
            ->where('role_id', '=', '2')
            ->from('roles_users')
            ->execute();
        return count($result);
    }
}
