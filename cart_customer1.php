
<!DOCTYPE html>
<html>
<body>


<br>
<br>
<br>
<br><br>
<br>
<br>
 <center> 
  <?php session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
 ?>



 <p style="font-family:verdana;color:blue;background-color:powderblue;font-size=130%">
<?php

if(isset($_POST['submit'])){
if(!empty($_POST['food'])) {
// Counting number of checked checkboxes.
$count = count($_POST['food']);
echo "You have selected following ".$count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.

}
}

{

	
foreach($_POST['food'] as $qty)
{
   echo $qty . "\r\n"; ?> <br> <?php 

	//print_r($food[0]);
	//print_r($fooddiffer);
	
		if (isset($_POST['food'])) 
		{
			$cart=array();
			$file=fopen("cart.txt","a") or die("file error");
			$c=0;
			
		
			$c=$c+fwrite($file,$qty);
			$c=$c+fwrite($file,"\r\n");
			
		} 
		
		
		
		
		
}



	
	

}


?>

<h1>Thank you for Ordering,Sir</h1>
<br/><a href="menu_customer.php">Go Back To Order</a><br/>  




<?php
 }
 else {
	 echo "Login First ";
 }
 ?>