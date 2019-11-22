
<!DOCTYPE html>
<html>
<body style="font-family:verdana;color:blue;font-size=130%">


<br>
<br>
<br>
<br><br>
<br>
<br>
 <center> 
<h2>Menu</h2>



<?php 




//$type= $_REQUEST["ItemType"];
//$name= $_REQUEST["ItemName"];
//$price= $_REQUEST["Price"];
global $data;
	$conn = mysqli_connect("localhost", "root", "","fooddb");
	$count=0;
	$sql= "select * from food";
	//$sql="Insert into pass from regi where email='".$_REQUEST["email"]."'";
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	while($row = mysqli_fetch_assoc($result)) {
		//echo $row["uname"];echo "<br/>";
		//print_r($row);
		$temp["type"]=$row["type"];
		$temp["name"]=$row["name"];
		$temp["price"]=$row["price"];
		$data[]=$temp;
		$count++;
	}
	

	
	
//	print_r($data[0]["type"]);
	
	
	
?>
<?php session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes" ){
	
	
	
	if(isset($_COOKIE["email"])){
$username= $_COOKIE["email"];
echo "hello FROM COOKIE ". $username;

}
else{ echo "hello FROM SESSION " . $_SESSION["email"];
}
	
 ?>

</h2>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br/>

 <center>
 

</center>
 <p style="font-family:verdana;color:blue;font-size=130%">
<picture>
<!  <source media="(max-width: 200px)" srcset="pizza.jpg">
  
  <img src="burger.jpg" alt="Picture" width="300" height="300" align="left"> 
  
  <form action="cartphp.php">
  
  

  <?php 
 
 // echo $count;
  $i= $count-1;
  while($i!==-1)
  { 
	  if($data[$i]["type"]=="Burger"){
	  echo nl2br ( "\n");
	  echo "\r\n";
	  $new=  implode(" | ",$data[$i]);
	  ?>
	  <input type="checkbox" name="data[]" value="<?php echo $data[$i]["name"] ?>" > <?php echo  $new  ?> <br>
	  <?php
	  }
	  $i--;
	  
  }  
  
  ?>
  

<br><br>

<br><br>
<br><br><br><br><br><br>
<br><br>


 <! <source media="(max-width: 100px)" srcset="pizza.jpg"> 
  
  <img src="pizza.jpg" alt="Picture" width="300" height="300" align="left">

  
  


  <?php 
 
 // echo $count;
  $i= $count-1;
  while($i!==-1)
  { 
	  if($data[$i]["type"]=="Pizza"){
	  echo nl2br ( "\n");
	  echo "\r\n";
	  $new=  implode(" | ",$data[$i]);
	  ?>
	  <input type="checkbox" name="data[]" value="<?php echo $data[$i]["name"] ?>" ><?php echo  $new  ?> <br>
	  <?php
	  }
	  $i--;
	  
  }  
  
  ?>
    <input type="submit" value="Submit">
	</form>
</picture>


































































<!--






<picture>
  <source media="(max-width: 200px)" srcset="burger.jpg">
  
  <img src="burger.jpg" alt="Picture" style="width:200px;">
</picture>
<?php 
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){


/*
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
</picture> <br>
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
	
	//echo "<br>";
	
	
	
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

?> 
	<input type="submit" name="submit" value="Submit"/>
<?php

//print_r($ar);






*/
?>


-->
<br>
<br>
<br>
<a href="logout.php">Log Out</a><br/>
<br/><a href="delete_account.php">delete account</a><br/>  
<br/><a href="edit_account.php">Edit current info</a><br/>  







































</p>
<?php 
}
}


?>