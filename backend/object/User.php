 <?php
	class User{
	 
		// database connection and table name
		private $conn;
		private $table_name = "user_profile";
	 
		// object properties
		private $username;
		private $password;
		private $email;
		
		private $new_password;
		
		// constructor with $db as database connection
		public function __construct($db) {
			$this->conn = $db;
		}
		
		function putDataTwoParam($username, $password) {
			$this->username = $username;
			$this->password = $password;
		}
		
		function putDataThreeParam($username, $password, $email) {
			$this->username = $username;
			$this->password = $password;
			$this->email = $email;
		}

		// check User login
		function userSignIn(){
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
		
		function userSignUp(){
			// select all query
			$query = "SELECT * FROM " . $this->table_name . " where username=:username and password=:password and email=:email";
			// prepare query statement
			$stmt = $this->conn->prepare($query);
			// sanitize
			$this->username=htmlspecialchars(strip_tags($this->username));	
			$this->password=htmlspecialchars(strip_tags($this->password));
			$this->email=htmlspecialchars(strip_tags($this->email));
			// bind values
			$stmt->bindParam(":username", $this->username);
			$stmt->bindParam(":password", $this->password);
			$stmt->bindParam(":email", $this->email);
			// execute query
			$stmt->execute();
			
			// Count row
			$num = $stmt->rowCount();
			// Check if user already exist
			if($num > 0) {
				return false;
			}
			else {
				// select all query
				$query = "INSERT INTO " . $this->table_name . " SET username=:username, password=:password, email=:email";
				// prepare query statement
				$stmt = $this->conn->prepare($query);
				// sanitize
				$this->username=htmlspecialchars(strip_tags($this->username));	
				$this->password=htmlspecialchars(strip_tags($this->password));
				$this->email=htmlspecialchars(strip_tags($this->email));
				// bind values
				$stmt->bindParam(":username", $this->username);
				$stmt->bindParam(":password", $this->password);
				$stmt->bindParam(":email", $this->email);
				// execute query
				$stmt->execute();
				
				return true;
			}
		}
		
		function userResetPassword(){
			$query = "UPDATE " . $this->table_name . " SET password=:new_password where username=:username and password=:password limit 1";
			// prepare query statement
			$stmt = $this->conn->prepare($query);
			// sanitize
			$this->new_password=htmlspecialchars(strip_tags($this->new_password));
			$this->username=htmlspecialchars(strip_tags($this->username));
			$this->password=htmlspecialchars(strip_tags($this->password));
			// bind values
			$stmt->bindParam(":new_password", $this->new_password);
			$stmt->bindParam(":username", $this->username);
			$stmt->bindParam(":password", $this->password);
			// execute query
			$stmt->execute();

			return $stmt;
		}
	}
?>
