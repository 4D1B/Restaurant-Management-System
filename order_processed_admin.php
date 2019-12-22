
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
/*
$delete=array();
$getstr=array();
if(isset($_POST['submit'])){
if(!empty($_POST['data'])) {
$count = count($_POST['data']);
echo "You have selected following ".$count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['data'] as $k => $v) {
echo "<p>"."</p>" . $v;
array_push($delete,$v);
}
}
}

*/
//



//if(isset($_REQUEST['name'])){
//print_r($_REQUEST);
if(isset($_REQUEST['data'])){
if(!empty($_REQUEST['data'])) {
// Counting number of checked checkboxes.
$count = count($_REQUEST['data']);
echo "You have selected ".$count." option(s): <br/>";

}
}
foreach($_REQUEST['data'] as $qty){
global $data;
$exp=array();
$exp=	explode("+",$qty);

	echo $qty;
   // print_r($_REQUEST);
	$conn = mysqli_connect("localhost", "root","","fooddb");
	$sql2= "insert into processing(orderinfo)	VALUES('".$qty."')";
	$sql= "delete from cart where username=  '".$exp[0]."'   and item= '".$exp[1]."'    and time = '".$exp[2]."' ";
//
//	$sql="select * from user where uname='".$_REQUEST["firs"]."'";
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$result2 = mysqli_query($conn, $sql2)or die(mysqli_error($conn));
	
//	while($row = mysqli_fetch_assoc($result)) {
		//echo $row["uname"];echo "<br/>";
//		print_r($row);
		//$temp["first_name"]=$row["first_name"];
	//	$temp["last_name"]=$row["last_name"];
//		$temp["phn"]=$row["phn"];
		
	}
	;
}
	

/////////////////////////////////////////


$sum=0;


































/*
$read = fopen("cart.txt","r");
  
 
while(! feof($read))  
{
	$seecart= fgets($read);
	
	
	//array_push($getstr,$seecart);
	
	
}
$c=0;
$file=fopen("dummy.txt","a") or die("file error");
//foreach($getstr as $str)
{
	//foreach($delete as $val)
	{	
		//if(strpos($str, $val) > 0)
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
*/


?>

<a href="menu_admin.php">Go To Menu</a><br/>

