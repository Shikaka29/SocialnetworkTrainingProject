<?php defined('SYSPATH') or die('No direct script access.');

class Model_Post extends Model
{
    /**
     * Get the last 10 posts
     * @return ARRAY
     */
    public function getLastTenPosts()
    {
        $sql = 'SELECT *'."\n".
            'FROM   `posts`'."\n".
            'ORDER BY `id` DESC'."\n".
            'LIMIT  0, 10';

        return DB::query(Database::SELECT, $sql, FALSE)
            ->execute();

    }

    public function addPost($title, $post)
    {
        DB::insert('posts', array('title','post'))
            ->values(array($title, $post))
            ->execute();
    }

}