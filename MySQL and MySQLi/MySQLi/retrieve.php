<?php
$db = mysqli_connect("localhost","root","","web2016");

$query = "SELECT * FROM cars ORDER BY price";
$result = $db->query($query);
$num = $result->num_rows;
for ($i=0;$i<$num;$i++){
	$row = $result->fetch_assoc();?>
	<?= $row["price"]?> <?= $row["title"]?> <?= $row["phone"]?>
	<a href="delete.php?id=<?= $row['id']?>">Delete</a>
<a href="edit.php?id=<?= $row['id']?>">Edit</a> <br/>
<?php
}
?>

<!-- Include new form -->
<?php include("new.php") ?>

