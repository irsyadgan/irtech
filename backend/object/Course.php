 <?php
	class Course{
	 
		// database connection and table name
		private $conn;
		private $table_main = "course_list";
	 
		// object properties
		private $image;
		private $price;
		private $review;
		private $title;
		
		// constructor with $db as database connection
		public function __construct($db) {
			$this->conn = $db;
		}

		// check User login
		function courseSelectAll(){
			// select all query
			$query = "SELECT * FROM " . $this->table_main;
			// prepare query statement
			$stmt = $this->conn->prepare($query);
			// execute query
			$stmt->execute();

			return $stmt;
		}
	}
?>
