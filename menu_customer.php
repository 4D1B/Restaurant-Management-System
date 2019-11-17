
<!DOCTYPE html>
<html>
<body style="font-family:verdana;color:blue;background-color:powderblue;font-size=130%">


<br>
<br>
<br>
<br><br>
<br>
<br>
 <center> 
<h2>Menu</h2>




<picture>
  <source media="(max-width: 200px)" srcset="burger.jpg">
  
  <img src="burger.jpg" alt="Picture" style="width:200px;">
</picture>
<?php 
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){

$username= $_SESSION["email"];

$fooddb=array();


$order=array();

$fooddb = fopen("burgerdb.txt","r");
$x=0;  
$food=array();
$fooddiffer=array();
while(! feof($fooddb))  
{
	$seeburger = fgets($fooddb);
	array_push($fooddiffer,$seeburger);
	if($x>0)
	{ 
		$name =$seeburger.$x; 
		?>
	
	

	
	<br>
	<?php
	array_push($food,$name);
	

	} $x++; echo "<br>";
}	

	
	

fclose($fooddb);


foreach($fooddiffer as $value){

	$value = implode("\n", array_filter(explode("\n", $value)));
	if($value == "") {} else{
?>

<form action="cart_customer1.php" method="POST">
  <input type="checkbox" name="food[]" value="<?php echo $username ." Ordered=> ". $value ."\r\n" ?> "> <?php echo $value ?> <br>


<?php
	}
}

//print_r($fooddiffer);
//print_r($food);
	
	


//print_r($ar);



?>

<picture>
  <source media="(max-width: 200px)" srcset="pizza.jpg">
  
  <img src="pizza.jpg" alt="Picture" style="width:200px;">
</picture>
<?php
$fooddb=array();

$food2=array();
$fooddiffer2=array();


$fooddb = fopen("pizzadb.txt","r");
  
  
while(! feof($fooddb))  
{
	$seepizza= fgets($fooddb);
	array_push($fooddiffer2,$seepizza);
	//echo $seepizza;
	
	echo "<br>";
	
	
	
}



fclose($fooddb);

foreach($fooddiffer2 as $value){

	$value = implode("\n", array_filter(explode("\n", $value)));
	if($value == "") {} else{
?>

<form action="cart_customer1.php" method="POST">
  <input type="checkbox" name="food[]" value="<?php echo $username ." Ordered=> ". $value ."\r\n" ?> "> <?php echo $value ?> <br>
  


<?php
	}
}
}
?> 
	<input type="submit" name="submit" value="Submit"/>
<?php

//print_r($ar);



?>
<br>
<br>
<br>
<a href="logout.php">Log Out</a><br/>







































</p>
