<?php



$arr = array('FİSTNAME' => 'HÜSEYİN', 'LASTNAME' => 'YENER');

echo json_encode($arr);


$con = new mysqli('mysql_db','root','root','mysql');

if($con)
{

    echo'Connect';
}

?>