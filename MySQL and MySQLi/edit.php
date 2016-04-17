<?php
mysql_connect("localhost","root","");
mysql_select_db("web2016");
$id = $_REQUEST["id"];
$query = "SELECT * FROM cars WHERE id=$id";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
<form action="update.php">
Title: <input type="text" name="title" value="<?= $row['title'] ?>"/><br/>
Price: <input type="number" name="price" value="<?= $row['price'] ?>"/><br/>
Phone: <input type="text" name="phone" value="<?= $row['phone'] ?>"/><br/>
<input type="hidden" name="id" value="<?= $row['id'] ?>"/><br/>
<input type="submit"/>
</form>
