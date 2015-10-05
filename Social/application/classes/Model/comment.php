<?php defined('SYSPATH') or die('No direct script access.');

class Model_Comment extends Model
{
    protected $_tableComments = 'comments';

    /**
     * Get comments for article
     * @return array
     */
    public static $myuser;
    public function __construct()
    {
        self::$myuser=Auth::instance()->get_user();
    }
    public function get_comments($article_id)
    {
        $query = DB::select('user', 'message','userid2')
            ->from($this->_tableComments)
            ->where('article_id', '=', $article_id)
            ->execute()
            ->as_array();

        if($query)
            return $query;
        else
            return array();
    }

    /**
     * Create new comment
     */
    public function create_comment($article_id, $user, $message)
    {
        $userid2=self::$myuser->id;
        DB::insert($this->_tableComments, array('article_id', 'user','userid2', 'message'))
            ->values(array($article_id, $user,$userid2, $message))
            ->execute();
    }
}