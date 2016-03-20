<?php
mysql_connect("localhost","root","");
mysql_select_db("web2016");
$id = $_REQUEST["id"];
$query = "DELETE FROM cars WHERE id=$id";
mysql_query($query);
header("location: retrieve.php");
?>
