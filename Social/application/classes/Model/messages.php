<?php defined('SYSPATH') or die('No direct script access.');

class Model_Messages extends Model
{
	public static $myuser;

	public function __construct()
	{
		self::$myuser = Auth::instance()->get_user();
	}

	public function get_messages($user_id)
	{
		$myid = self::$myuser->id; //получение айди самого себя

		//выбор сообщения где совпадают айди пользователей с сортировкой по времени
		$sql = 'SELECT * FROM messages
			WHERE (from_id = :myid AND to_id = :user_id)
			   OR (from_id = :user_id AND to_id = :myid)
			ORDER BY time ASC';

		return DB::query(Database::SELECT, $sql)
			->bind(':myid', $myid)
			->bind(':user_id', $user_id)
		->execute()->as_array();
	}

	public function send($to_id, $message)
	{
		$myid = self::$myuser->id; //получшение собственного айди.
		//вставка в таблицу сообщений где айди пользователей совпадают
		$sql = 'INSERT INTO messages (from_id, to_id, message) VALUES
									(:from_id, :to_id, :message)';

		return DB::query(Database::INSERT, $sql)
			->bind(':from_id', $myid)
			->bind(':to_id', $to_id)
			->bind(':message', $message)
		->execute();

	}

}