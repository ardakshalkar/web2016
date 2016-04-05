<?php
$db = mysqli_connect("localhost","root","","web2016");
$id = $_REQUEST["id"];
$query = "SELECT * FROM cars WHERE id=$id";
$result = $db->query($query);
$row =  $result->fetch_assoc();
?>
<form action="update.php">
Title: <input type="text" name="title" value="<?= $row['title'] ?>"/><br/>
Price: <input type="number" name="price" value="<?= $row['price'] ?>"/><br/>
Phone: <input type="text" name="phone" value="<?= $row['phone'] ?>"/><br/>
<input type="hidden" name="id" value="<?= $row['id'] ?>"/><br/>
<input type="submit"/>
</form>
