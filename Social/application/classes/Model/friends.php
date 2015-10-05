<?php defined('SYSPATH') or die('No direct script access.');

class Model_Friends extends Model
{
	public static $myuser;

	public function __construct()
	{
		self::$myuser = Auth::instance()->get_user();
	}

	public function add_friend($user_id)
	{
		$myid = self::$myuser->id;

		$sql = 'INSERT INTO friends (friend1, friend2) VALUES (:myid, :user_id)';

		return DB::query(Database::INSERT, $sql)
			->bind(':myid', $myid)
			->bind(':user_id', $user_id)
		->execute();
	}

	public function get_friends()
	{
		$myid = self::$myuser->id;

		$sql = 'SELECT u.* FROM users u
			JOIN friends f ON f.friend2 = u.id OR f.friend1 = u.id
			WHERE u.id != :myid
			AND (f.friend1 = :myid OR f.friend2 = :myid)';

		return DB::query(Database::SELECT, $sql)
			->bind(':myid', $myid)
		->execute()->as_array();
	}

	public function is_friend($user_id)
	{
		$myid = self::$myuser->id;

		$sql = 'SELECT
			COUNT(*) as is_friend
		FROM friends
		WHERE (friend1 = :myid AND friend2 = :user_id) OR
			  (friend1 = :user_id AND friend2 = :myid)';

		return DB::query(Database::INSERT, $sql)
			->bind(':myid', $myid)
			->bind(':user_id', $user_id)
		->execute()->get('is_friend');
	}

}