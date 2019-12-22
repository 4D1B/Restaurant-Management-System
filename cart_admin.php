
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



 <h2>CART</h2>
 <!- <p style="font-family:verdana;color:blue;font-size=130%">
<!--Customer order will appear one by one and it will be processed with loop-->

<form action="order_processed_admin.php" method="POST">


 <p style="font-family:verdana;color:blue;">

 
<?PHP
 global $data;
	$conn = mysqli_connect("localhost", "root", "","fooddb");
	$count=0;
	$sql= "select * from cart order by time DESC";
	//$sql="Insert into pass from regi where email='".$_REQUEST["email"]."'";
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	while($row = mysqli_fetch_assoc($result)) {
		//echo $row["uname"];echo "<br/>";
		//print_r($row);
		$temp["username"]=$row["username"];
		$temp["item"]=$row["item"];
		$temp["time"]=$row["time"];
		$data[]=$temp;
		$count++;
	}
 

 ?>
 
 
 
 <form action="order_processed_admin.php" method="POST">

  
  


 <?php 
 
 // echo $count;
  $i= $count-1;
  while($i!==-1)
  { 
	  {
			
	  echo nl2br ( "\n");
	  echo "\r\n";
	  $new=  implode(" | ",$data[$i]);
	  ?>
	  <input type="checkbox" name="data[]" value="<?php echo $data[$i]["username"]."+".$data[$i]["item"]."+".$data[$i]["time"] ?>" ><?php echo  $new  ?> <br>
	  <?php
	  }
	  $i--;
	  
  }  
  
  ?>

<input type="submit" name="submit" Value="Submit"/>

<a href="menu_admin.php">Go back to Menu</a><br/>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
<?php

/*
$fooddb = fopen("cart.txt","r");

$file='cart.txt';
$str=file_get_contents("$file");
$str = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $str);
file_put_contents("$file", "$str");



$food=array();
$x=0;
$fooddiffer=array();
file_put_contents('cart.txt',implode('', file('cart.txt', FILE_SKIP_EMPTY_LINES)));

while(! feof($fooddb))  
{
	$seecart = fgets($fooddb);
	$seecart =preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\r\n", $seecart);
	array_push($fooddiffer,$seecart);
	if($x>0)
	{ 
		$name =$seecart.$x; 
		?>
	

	<?php
	array_push($food,$name);
	

	} $x++;
}	

	
	

fclose($fooddb);


foreach($fooddiffer as $value){

	$value = implode("\n", array_filter(explode("\n", $value)));
	if($value === "\r\n") {} else{
?>

<form action="order_processed_admin.php" method="POST">
  <input type="checkbox" name="food[]" value="<?php echo  $value ."\r\n" ?> "> <?php echo $value."\r\n"  ?> 
  
  <br>
  <br>
  <br>

<?php
	}
}
 ?>
 <input type="submit" name="submit" value="Submit"/>
 </p>
 

 
 
 
 
 
 
  
<br/><a href="menu_admin.php">Go To Menu</a><br/><?php 

*/
?>



<?php
 }
 else {
	 echo "Login First ";
 }
 ?>