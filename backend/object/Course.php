 <?php
	class Course{
	 
		// database connection and table name
		private $conn;
		private $table_main = "course_list";
		private $table_course_detail = "course_detail";
	 
		// object properties
		private $id;
		private $image;
		private $price;
		private $review;
		private $title;
		
		// constructor with $db as database connection
		public function __construct($db) {
			$this->conn = $db;
		}

		function putDataOneParamID($id) {
			$this->id = $id;
		}
		
		// select all course
		function courseSelectAll(){
			// select all query
			$query = "SELECT * FROM " . $this->table_main;
			// prepare query statement
			$stmt = $this->conn->prepare($query);
			// execute query
			$stmt->execute();

			return $stmt;
		}
		
		function courseSelectOne(){
			// select all query
			$query = "SELECT * FROM " . $this->table_course_detail . " where id=:id limit 1";
			// prepare query statement
			$stmt = $this->conn->prepare($query);
			// sanitize
			$this->id=htmlspecialchars(strip_tags($this->id));
			// bind values
			$stmt->bindParam(":id", $this->id);
			// execute query
			$stmt->execute();

			return $stmt;
		}
	}
?>
