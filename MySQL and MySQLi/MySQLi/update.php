<?php
$db = mysqli_connect("localhost","root","","web2016");
$id	= $_REQUEST["id"];
$title = $_REQUEST["title"];
$price = $_REQUEST["price"];
$phone = $_REQUEST["phone"];
if ($phone && preg_match('/\+?(8|7)?[0-9]{10}/',$phone)){
	$query = "UPDATE `cars` SET `title`='$title',`price`=$price,`phone`='$phone'
WHERE id=$id";
	//echo $query;
	$db->query($query);
	header("location: retrieve.php");
}
else{
	echo "Error";
}
?>
