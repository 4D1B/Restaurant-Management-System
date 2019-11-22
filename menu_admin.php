


<!DOCTYPE html>
<html>
<body><h2>Menu</h2>
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
<pre>
																			<a href="cart_admin.php">Go To Cart</a>

																			<a href="indexb.html">Edit Burger info</a>
																			
																			<a href="indexp.html">Edit Pizza info</a>
																			
																			<a href="addnewitem.html">Add New Item</a>
																			
																			<a href="deleteitem.html">Delete Item</a>
																			
																			<a href="Updateitem.html">Update Item</a>
</pre>
 <center>
 

</center>
 <p style="font-family:verdana;color:blue;font-size=130%">
<picture>
<!  <source media="(max-width: 200px)" srcset="pizza.jpg">
  
  <img src="burger.jpg" alt="Picture" width="300" height="300" align="left"> 
  <?php 
 
 // echo $count;
  $i= $count-1;
  while($i!==-1)
  { 
	  if($data[$i]["type"]=="Burger"){
	  echo nl2br ( "\n");
	  echo "\r\n";
	  echo  implode(" | ",$data[$i]);
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
  $i=0;
  //foreach($data as $k=>$v )
  {
	  
 // echo $count;
  $i= $count-1;
  while($i!==-1)
  { 
      
    //  echo $i;
	  if($data[$i]["type"]=="Pizza"){
	  echo nl2br ( "\n");
	  echo "\r\n";
	  echo  implode(" | ",$data[$i]);
	  }
	  $i--;
	  
  } 
  }
  ?>
</picture>



<?php	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
//comment out start
/* 
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
		//echo $seeburger;
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
  
  <img src="pizza.jpg" alt="Picture" width="300" height="300" align="left">
</picture>
<?php
$fooddb=array();




$fooddb = fopen("pizzadb.txt","r");
  
  
while(! feof($fooddb))  
{
	$seepizza= fgets($fooddb);
	array_push($fooddiffer,$seepizza);
	//echo $seepizza;
	
	echo "<br>";
	
	
	
}



fclose($fooddb);

	?>

 

<?php
	


//print_r($ar);

*/ ////comment outted

?>

<br>
<br>

<a href="logout.php">Log Out</a><br/>


















<?php
 }
 else {
	 echo "Login First ";
 }
 ?>
