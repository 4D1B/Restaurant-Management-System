<?php
print_r($GLOBALS);
$errors=0;
$source=$_FILES['fileToUpload']['tmp_name'];
$target="uploads/".$_FILES['fileToUpload']['name'];
if(file_exists($target)){
	$errors=1;
	echo "File exists";
	$sql="INSERT INTO food(picture,type)  values('".$target."' ,'".$_POST['type']."')";
//		$sql="UPDATE food SET picture='".$target."' WHERE TYPE ='".$_POST['type']."'";
	echo $sql;
	$conn = mysqli_connect("localhost", "root", "","fooddb");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn)){
		echo "File uploaded";
	}
}
else{
	if(move_uploaded_file($source,$target)){
		echo "File uploaded:".$target;
	}
	$sql="INSERT INTO food(picture,type)  values('".$target."' ,'".$_POST['type']."')";
	echo $sql;
	$conn = mysqli_connect("localhost", "root", "","fooddb");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn)){
		echo "File uploaded";
	}
}
?>