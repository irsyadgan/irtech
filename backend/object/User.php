 <?php
	class User{
	 
		// database connection and table name
		private $conn;
		private $table_name = "user_profile";
	 
		// object properties
		private $username;
		private $password;
		private $description;
		
		// constructor with $db as database connection
		public function __construct($db) {
			$this->conn = $db;
		}
		
		function putDataTwoParam($username, $password) {
			$this->username = $username;
			$this->password = $password;
		}

		// check User login
		function checkLogin(){
			// select all query
			$query = "SELECT * FROM " . $this->table_name . " where username=:username and password=:password limit 1";
			// prepare query statement
			$stmt = $this->conn->prepare($query);
			// sanitize
			$this->username=htmlspecialchars(strip_tags($this->username));	
			$this->password=htmlspecialchars(strip_tags($this->password));
			// bind values
			$stmt->bindParam(":username", $this->username);
			$stmt->bindParam(":password", $this->password);
			// execute query
			$stmt->execute();

			return $stmt;
		}
	}
?>
