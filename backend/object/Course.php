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
		private $search;
		private $title;
		private $buy;
		
		// constructor with $db as database connection
		public function __construct($db) {
			$this->conn = $db;
		}

		function putDataOneParamID($id) {
			$this->id = $id;
		}
		
		function putSearch($search) {
			$this->search = $search;
		}
		
		function putBuy($id) {
			$this->buy = $id;
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
		
		function courseSearch(){
			// select all query
			$query = "SELECT course_list.course_image_link, course_list.review, course_list.title as tit_main, course_detail.* FROM course_list 
				INNER JOIN course_detail ON course_list.id=course_detail.id where course_detail.title LIKE '%" . $this->search. "%'";
			// prepare query statement
			$stmt = $this->conn->prepare($query);
			// sanitize
			//$this->search=htmlspecialchars(strip_tags($this->search));
			// bind values
			//$stmt->bindParam(":search", $this->search);
			// execute query
			$stmt->execute();

			return $stmt;
		}

		function courseBuy(){
			// select all query
			$query = "INSERT INTO `user_course`(`username`, `id`) VALUES ('". $_SESSION['uname'] ."','". $this->buy ."')";
			// prepare query statement
			$stmt = $this->conn->prepare($query);
			// sanitize
			//$this->search=htmlspecialchars(strip_tags($this->search));
			// bind values
			//$stmt->bindParam(":search", $this->search);
			// execute query
			$stmt->execute();

			return $stmt;
		}
	}
?>
