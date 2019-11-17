
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

 <h2>CART</h2>
 <p style="font-family:verdana;color:blue;background-color:powderblue;font-size=130%">
<!--Customer order will appear one by one and it will be processed with loop-->

<form action="order_processed_admin.php" method="POST">


 <p style="font-family:verdana;color:blue;background-color:powderblue;">

 
 
<?php
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
 

 
 
 
 
 
 
  
<br/><a href="menu_admin.php">Go To Menu</a><br/>