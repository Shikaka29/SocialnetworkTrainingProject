<?php defined('SYSPATH') or die('No direct script access.');


class Model_Article extends Model
{
    protected $_tableArticles = 'articles';



    /**
     * Get article
     * @return array
     */
    public function get_article($id = '')
    {
        $sql = "SELECT * FROM ". $this->_tableArticles ." WHERE `id` = :id";

        $query = DB::query(Database::SELECT, $sql, FALSE)
            ->param(':id', (int)$id)
            ->execute();

        $result = $query->as_array();

        if($result)
            return $result[0];
        else
            return FALSE;
    }


    public function get_all($userid)
    {

       /* $sql = "SELECT * FROM ". $this->_tableArticles. " WHERE * userid=$userid";
        return DB::query(Database::SELECT, $sql)
            ->execute();
       */

        $query = DB::select('title', 'author','content_short','content_full','date','id','alt_title')
            ->from($this->_tableArticles)
            ->where('userid', '=', $userid)
            ->execute()
            ->as_array();

        if($query)
            return $query;
        else
            return array();
    }

    public function addArticle($title, $alt_title,$author,$content_short,$content_full,$userid)
    {
        DB::insert('articles', array('title','alt_title','author','content_short','content_full','userid'))
            ->values(array($title, $alt_title,$author,$content_short,$content_full,$userid))
            ->execute();
    }


}