 <p style="font-family:verdana;color:blue;background-color:powderblue;font-size=130%">

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
	$x=1;
	echo $_POST['food'];
	//print_r($food[0]);
	//print_r($fooddiffer);
	
		if (isset($food[1])) 
		{
			$cart=array();
			$file=fopen("cart.txt","a") or die("file error");
			$c=0;
			$c=$c+fwrite($file,"\r\n");
			$c=$c+fwrite($file,$_SESSION["email"]);
			$c=$c+fwrite($file,"=>");
			$c=$c+fwrite($file,$fooddiffer[2]);
		} 
		
		
		if (isset($food[0])) 
		{
			$cart=array();
			$file=fopen("cart.txt","a") or die("file error");
			$c=0;
			$c=$c+fwrite($file,"\r\n");
			$c=$c+fwrite($file,$_SESSION["email"]);
			$c=$c+fwrite($file,"=>");
			$c=$c+fwrite($file,$fooddiffer[1]);
		} 
		
		
		

	
	
}


?>