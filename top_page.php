<?php
include 'dbconnect.php';
$sql="SELECT * FROM article";
$result=$conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Top Page</title>

</head>
<body>
<h1>Bulletin Board</h1>
<table border="1" cellspacing="1" cellpadding="1">
	<tr>
		<td>ID</td>
		<td>Title</td>
		<td>Content</td>
		<td>Created_at</td>
		<td>Action</td>
	</tr>
	<?php
	if($result->num_rows>0){
		while($rows=$result->fetch_assoc()){

			$id=$rows["id"];
			echo "<tr>";
			echo "<td>".$id."</td>";
			echo "<td>".$rows["title"]."</td>";
			echo "<td>".$rows["content"]."</td>";
			echo "<td>".$rows["created_at"]."</td>";
			echo "<form action='edit_article.php' method='POST'>";
			echo "<input type='hidden' name='id' value='$id'>";
			echo "<td><input type='submit' name='edit' value='edit'></td>";
			echo "</form>";
			echo "<form action='delete_function.php' method='POST'>";
			echo "<input type='hidden' name='id' value='$id'>";
			echo "<td><input type='submit' name='delete' value='delete'></td>";
			echo "</form>";
			echo "</tr>";

		}

	}




	?>
</table>
</body>
</html>