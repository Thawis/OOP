<?php 
class Product{
	private $conn;
	private $table_name = "t_product";

	public function __construct($db){
		$this->conn = $db;
	}
	public function readAll($from_record_num,$records_per_page){
		$sql = "SELECT * FROM " . $this->table_name . " ORDER BY P_Number ASC LIMIT ?,?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(1,$from_record_num, PDO::PARAM_INT);
		$stmt->bindParam(2,$records_per_page, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt;
	}
}

?>