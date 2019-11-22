<!DOCTYPE html>
<html>
<body>
 <?php session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
 ?>



 <center>
 <p style="font-family:verdana;color:blue;background-color:powderblue;font-size=130%">
<h1>Thank you for Ordering,Sir</h1>
<form action="Menu.html" method="POST">
<p>Would you like to order again?</p>
</body>

 <input type="submit" value="Go to Menu" />

<?php 
}

?>