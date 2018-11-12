<?php 
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Top Page</title>
</head>
<body>
<h1>Create new post</h1>
<form action="create_article.php" method="POST">
<span>Title</span>
<input type="text" size="30" name="title"><br>
<span>Content</span>
<textarea name="content" cols="25" rows="4"></textarea><br>
<input type="submit" name="post" value="post">
<?php
if(isset($_POST["post"])){

	$title=$_POST["title"];
	$content=$_POST["content"];
	date_default_timezone_set('Asia/Manila');
	$create_at=date('Y/m/d G:i:s');

	$sql="INSERT INTO article (title,content,created_at) VALUES('$title','$content','$create_at')";

	if($conn->query($sql)===TRUE){

		echo "Post was successful!";
		echo "<br>";
		echo "<a href='top_page.php'>Article Title</a>";

	}else{

		echo "Failure" .$sql. "<br>" .$conn->error;
	}
}
?>
</form>
</body>
</html>