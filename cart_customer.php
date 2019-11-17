

<?php
if(isset($_POST['submit'])){
if(!empty($_POST['food'])) {
// Counting number of checked checkboxes.
$count = count($_POST['food']);
echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['food'] as $selected) {
echo "<p>".$selected ."</p>";
}


{
	
	print_r($_POST);
	$x=1;
	echo $_POST['food'];
	//print_r($food[0]);
	//print_r($fooddiffer);
	
		if (isset($food[])) 
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


















<!--Customer order will appear one by one and it will be processed with loop
<form action="thank_cus.html" method="POST">
  <label for="test">Customer name</label><br>
<textarea rows="4" cols="50">
Orders of customers one by one
</textarea>
<picture>
  <source media="(max-width: 65px)" srcset="img_pink_flowers.jpg">
  <source media="(max-width: 46px)" srcset="img_white_flower.jpg">
  <img src="" alt="Picture" style="width:auto;">
</picture>
<br>
<textarea rows="4" cols="50">
Orders of customers one by one
</textarea>
<picture>
  <source media="(max-width: 65px)" srcset="img_pink_flowers.jpg">
  <source media="(max-width: 46px)" srcset="img_white_flower.jpg">
  <img src="img_orange_flowers.jpg" alt="Picture" style="width:auto;">
</picture>
<br>
<textarea rows="4" cols="50">
Orders of customers one by one
</textarea>
<picture>
  <source media="(max-width: 65px)" srcset="img_pink_flowers.jpg">
  <source media="(max-width: 46px)" srcset="img_white_flower.jpg">
  <img src="img_orange_flowers.jpg" alt="Picture" style="width:auto;">
</picture>
<br>
<textarea rows="4" cols="50">
Orders of customers one by one
</textarea><picture>
  <source media="(max-width: 65px)" srcset="img_pink_flowers.jpg">
  <source media="(max-width: 46px)" srcset="img_white_flower.jpg">
  <img src="img_orange_flowers.jpg" alt="Picture" style="width:auto;">
</picture><br>
<textarea rows="4" cols="50">
Orders of customers one by one
</textarea><picture>
  <source media="(max-width: 65px)" srcset="img_pink_flowers.jpg">
  <source media="(max-width: 46px)" srcset="img_white_flower.jpg">
  <img src="img_orange_flowers.jpg" alt="Picture" style="width:auto;">
</picture><br>
<textarea rows="4" cols="50">
Orders of customers one by one
</textarea><picture>
  <source media="(max-width: 65px)" srcset="img_pink_flowers.jpg">
  <source media="(max-width: 46px)" srcset="img_white_flower.jpg">
  <img src="img_orange_flowers.jpg" alt="Picture" style="width:auto;">
</picture><br>
 <input type="submit" value="Proceed to checkout" />
  
  <div>
</body>

-->