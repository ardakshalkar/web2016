<?php
mysql_connect("localhost","root","");
mysql_select_db("web2016");

$query = "SELECT * FROM cars ORDER BY price";
$result = mysql_query($query);
$num = mysql_num_rows($result);
for ($i=0;$i<$num;$i++){
	$row = mysql_fetch_array($result);?>
	<?= $row["price"]?> <?= $row["title"]?> <?= $row["phone"]?>
	<a href="delete.php?id=<?= $row['id']?>">Delete</a>
<a href="edit.php?id=<?= $row['id']?>">Edit</a> <br/>
<?php
}
?>

<!-- Include new form -->
<?php include("new.php") ?>

