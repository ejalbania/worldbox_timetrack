<?php 

/**
* Database Class
*/
class Database
{
	
	function __construct()
	{
		$host = "localhost";
		$username = "root";
		$password = "root";
		$database = "juan";

		$GLOBALS['conn'] = new PDO("mysql:host=$host;dbname=$database",$username,$password);
		$GLOBALS['conn']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) or die("Error found! " . mysqli_connect_error());
	}

	public static function FetchLogin($studentID, $password){
		try {
			$query = "SELECT * FROM tbl_accounts where id=$studentID AND password='$password'";
			$query = $GLOBALS['conn']->prepare($query);

			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);

			return $result;
		} catch (Exception $e) {
			die("Error! $e");
		}
	}
}
 ?>

<?php $db = new Database(); ?>