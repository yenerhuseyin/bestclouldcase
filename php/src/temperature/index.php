<?php
include "db.php";
include "function.php";
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
   if($_SERVER['REQUEST_METHOD'] == "GET") {


    if(isset($_GET["city"])) {
		$city = ($_GET["city"]);			
			$bilgiler = $db->query("select * from  btscity where city_name='$city'")->fetch(PDO::FETCH_ASSOC);
			$jsonArray = $bilgiler;
			
			$_code = 200;
	}}
	;
SetHeader($_code);
$jsonArray[$_code] = HttpStatus($_code);
echo json_encode($jsonArray);
?>