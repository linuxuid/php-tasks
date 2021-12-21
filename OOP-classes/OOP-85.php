<?php 
/**
 * Класс DatabaseShell
 */ 
echo "<pre>";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

class DatabaseShell
{
	private $link;

	public function __construct($host, $user, $password, $database)
	{

		$this->link = mysqli_connect($host, $user, $password, $database);

		mysqli_query($this->link, "SET NAMES 'utf8'");

		printf("Успешно... %s\n", mysqli_connect_error());
	}

		public function save($table, $columns, $data)
		{
			
			$sql = "INSERT INTO ".$table." ".$columns." VALUES ".$data;
			$sql = $this->link->query($sql);
			if ($sql == true) {
				return $sql;
			} else {
				return false;
			}
		}
		
		public function del($table, $id)
		{
			$sql = "DELETE FROM ".$table." WHERE id=".$id;
			$sql = $this->link->query($sql);
			if ($sql == true) {
				return true;
			} else {
				return false;
			}
		}
		
		public function delAll($table, $ids)
		{
			$sql = "DELETE FROM ".$table." WHERE id in ".$ids;
			$sql = $this->link->query($sql);
			if ($sql == true) {
				return true;
			} else {
				return false;
			}
		}
		
		public function get($table, $id)
		{
			$sql = "SELECT * FROM ".$table." WHERE id=".$id;
			$sql = $this->link->query($sql);
			$sql = $sql->fetch_assoc();
			return $sql;
		}
		
		public function getAll($table, $ids)
		{
			$sql = "SELECT * FROM ".$table." WHERE id in ".$ids;
			$sql = $this->link->query($sql);
			$sql = $sql->fetch_assoc();
			return $sql;
		}
		
		public function selectAll($table, $condition)
		{
			$sql = "SELECT * FROM ".$table." WHERE ".$condition;
			$sql = $this->link->query($sql);
			$sql = $sql->fetch_assoc();
			return $sql;
		}
}
$db = new DatabaseShell('localhost', 'test', 'test', 'mydb');


/**
 * Select noted
 */ 
var_dump($db->getAll('users', '(13,14)'));
var_dump($db->get('users', 14));
var_dump($db->selectAll('users', "name='Max'"));

/**
 * delete notes
 */ 
echo $db->del('users', 13);



?>