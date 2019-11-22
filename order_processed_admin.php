
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
 <?php session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
 ?>



 <p style="font-family:verdana;color:blue;background-color:powderblue;font-size=130%">

<!--Customer order will appear one by one and it will be processed with loop-->

<?php
$delete=array();
$getstr=array();
if(isset($_POST['submit'])){
if(!empty($_POST['food'])) {
$count = count($_POST['food']);
echo "You have selected following ".$count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['food'] as $k => $v) {
echo "<p>"."</p>" . $v;
array_push($delete,$v);
}
}
}


$sum=0;
$read = fopen("cart.txt","r");
  
 
while(! feof($read))  
{
	$seecart= fgets($read);
	
	
	array_push($getstr,$seecart);
	
	
}
$c=0;
$file=fopen("dummy.txt","a") or die("file error");
foreach($getstr as $str)
{
	foreach($delete as $val)
	{	
		if(strpos($str, $val) > 0)
		{
			echo $str;
			//echo $seecart. $line; ?><br> <?php
			
			$c=$c+fwrite($file,"\r\n");
		
			$c=$c+fwrite($file,$val);
			
		}
		else
		{
			//echo "didntgotit";
			$sum++;
		}
	}
}
?>
<br/><a href="menu_admin.php">Go To Menu</a><br/>



</p>



<?php 
}

?>