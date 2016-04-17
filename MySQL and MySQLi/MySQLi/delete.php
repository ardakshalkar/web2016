<?php
$db = mysqli_connect("localhost","root","","web2016");
$id = $_REQUEST["id"];
$query = "DELETE FROM cars WHERE id=$id";
$db->query($query);
header("location: retrieve.php");
?>
