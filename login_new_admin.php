
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








<script>
function showHint() {
	str=document.getElementById('em').value;
	document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			
			var resp=JSON.parse(xmlhttp.responseText);
			var st= xmlhttp.responseText;
			document.getElementById("txthint").innerHTML = st;
						document.getElementById("spinner").style.visibility= "hidden";

			//alert(st);
			msg="";
			var val="";
			
			document.getElementById("txtint").innerHTML = msg;
		//	document.getElementById("txthint").innerHTML = xmlhttp.responseText;
		}
	};
	if(str.length==0)str="0";
	
	var url="jsondb.php?email="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
</script>























<form action="login_verify_admin.php" method="post">
<middle>
<center-left>
<center>
<h1>Your info to login</h1>
 <p style="font-family:verdana;color:blue;background-color:powderblue;font-size=130%">
User Name :
<input type="text" name="email" id="em" onkeyup="showHint()">  <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">
<span id="txthint"></span>
<br>
Password  : <input type="password" name="password" /><br>
<br>
Key_Admin  : <input type="password" name="skey" /><br>
<br>
<input type="submit" name="Submit" value="Login" /><br>



<br>



</form>



<?php
session_start();
if(isset($_SESSION["msg"])){
	echo $_SESSION["msg"];
	unset($_SESSION["msg"]);
}
?>

<br/><a href="reg.php">Go Back To home</a><br/>  

<a href="home.php">Home Page</a><br/>