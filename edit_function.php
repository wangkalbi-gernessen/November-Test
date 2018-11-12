<?php
include 'dbconnect.php';

if(isset($_POST["update"])){

	$id=$_POST["id"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	date_default_timezone_set('Asia/Manila');
	$created_at=date('Y/m/d G:i:s');

	$sql="UPDATE article SET title='$title',content='$content',created_at='$created_at' WHERE id='$id'";

	if($conn->query($sql)===TRUE){

		echo "Update was successful!";
		echo "<br>";
		echo "<a href='top_page.php'>Article Title</a>";

	}else{

		echo "Failure" .$sql. "<br>" .$conn->error;
	}
}
?>