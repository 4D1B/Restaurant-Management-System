
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
<h2>Menu</h2>

 <p style="font-family:verdana;color:blue;background-color:powderblue;font-size=130%">

<picture>
  <source media="(max-width: 100px)" srcset="pizza.jpg">
  <
  <img src="burger.jpg" alt="Picture" style="width:100px;">
</picture>
<?php 
session_start();
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
	

	} $x++;
	
	
	 if ('' === trim($seeburger)) {
        
        continue;
    }
	else
	{
		echo $seeburger;
	}
	echo "<br>";
}	

	
	

fclose($fooddb);

?>



<?php

//print_r($fooddiffer);
//print_r($food);
	
	


//print_r($ar);



?>

<picture>
  <source media="(max-width: 100px)" srcset="pizza.jpg">
  <
  <img src="pizza.jpg" alt="Picture" style="width:100px;">
</picture>
<?php
$fooddb=array();




$fooddb = fopen("pizzadb.txt","r");
  
  
while(! feof($fooddb))  
{
	$seepizza= fgets($fooddb);
	array_push($fooddiffer,$seepizza);
	echo $seepizza;
	
	echo "<br>";
	
	
	
}



fclose($fooddb);

	?>

 

<?php
	


//print_r($ar);



?>


\
<a href="logout.php">Log Out</a><br/>















<br/><a href="cart_admin.php">Go To Cart</a><br/>








<a href="indexb.html">Edit Burger info</a><br/>

<a href="indexp.html">Edit Pizza info</a><br/>




