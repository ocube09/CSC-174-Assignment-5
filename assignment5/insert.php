<?php  
require_once 'config.php';
$sql = "INSERT INTO survey(name, email, phone, pet, year) VALUES('".$_POST["name"]."', '".$_POST["email"]."','".$_POST["phone"]."', '".$_POST["pet"]."', '".$_POST["year"]."')";  
if(mysqli_query($link, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>