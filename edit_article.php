<?php 
include 'dbconnect.php';

$id=$_POST["id"];
$sql="SELECT * FROM article WHERE id='$id'";
$result=$conn->query($sql);	
if($result->num_rows>0){
	while($rows=$result->fetch_assoc()){

		$title=$rows["title"];
		$content=$rows["content"];
		$created_at=$rows["created_at"];
		
	}

}else{

	echo "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Top Page</title>
</head>
<body>
<h1>Create new post</h1>
<form action="edit_function.php" method="POST">
<span>Title</span>
<input type="text" size="30" name="title" value="<?php echo $title; ?>" ><br>
<span>Content</span>
<textarea name="content" cols="25" rows="4"><?php echo $content; ?></textarea><br>

<?php
$id=$_POST["id"];
echo "<input type='hidden' name='id' value='$id'>";
?>
<input type="submit" name="update" value="update">
</form>
</body>
</html>