<!DOCTYPE html>
<html lang="en">
<body>
<?php 
include 'dbconnect.php';


	$id=$_POST["id"];
	$sql="DELETE FROM article WHERE id='$id'";

	if($conn->query($sql)===TRUE){

		echo "Article is deleted successfully";
	}else{

		echo "Error".$conn->error;
	}

?>
</body>
</html>
