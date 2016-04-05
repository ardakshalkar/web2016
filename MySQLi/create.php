<?php
$db = mysqli_connect("localhost","root","","web2016");
$title = $_REQUEST["title"];
$price = $_REQUEST["price"];
$phone = $_REQUEST["phone"];
if ($phone && preg_match('/\+?(8|7)?[0-9]{10}/',$phone)){
	$query = "INSERT INTO `cars` (`title`,`price`,`phone`) values ('$title',$price,'$phone')";
	$db->query($query);
	header("location: retrieve.php");
}
else{
	echo "Error";
}
?>
