<?php
	include("../../php/database.php");
	$DB = new Database();
	$conn = $DB->getConn();
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$sql_select = "SELECT DISTINCT(Name) FROM education";
		$stmt = $conn->query($sql_select);
		$return = $stmt->fetchAll(PDO::FETCH_ASSOC); 
		echo json_encode($return);
	}
?>