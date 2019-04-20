 <?php
	class Course{
	 
		// database connection and table name
		private $conn;
		private $table_name = "course_list";
	 
		// object properties
		private $image;
		private $price;
		private $title;
		
		// constructor with $db as database connection
		public function __construct($db) {
			$this->conn = $db;
		}

		function putDataThreeParam($title, $price, $image) {
			$this->image = $image;
			$this->price = $price;
			$this->title = $title;
		}

		// check User login
		function userSignIn(){
			// select all query
			$query = "SELECT * FROM " . $this->table_name;
			// prepare query statement
			$stmt = $this->conn->prepare($query);
			// execute query
			$stmt->execute();

			return $stmt;
		}
	}
?>
