<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "urcscon3_shangh";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_shangh";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $name = Trim(stripslashes($_POST['name']));
    $email = Trim(stripslashes($_POST['email']));
    $phone = Trim(stripslashes($_POST['phone']));
    $textarea = Trim(stripslashes($_POST['textarea']));

	
	$query  = "INSERT INTO contact (name, email, phone, textarea) VALUES ('$name','$email','$phone','$textarea')";
	$result = mysqli_query($connection, $query);

?>

<?php include 'inc/html-top.inc' ;?> 

<body>

<?php include 'inc/nav.inc' ;?>

<!-- Container which has the Nigerian and Chinese Flags as the background, a representation of the countries where all the students are from -->
<div class="container-fluid bg-1 text-center home">
  <h3 class="margin"></h3>
  <img src="images/hand.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Globe" width="250" height="250"> <!-- An image of a globe was chosen by the desing artist in order to highlight the international theme of the website -->
</div>

<div class="container-fluid bg-3 text-center"> 

Success !
The Student is
<?php echo $name; ?><br><br>
Your email address : <?php echo $email; ?>
has been added.

<footer class="container-fluid bg-4 text-center">
  <p>Designed by Fiyinfoluwa Oluyinka </p> 
</footer>

</div>

<!-- Footer with the name of the Design Artist -->


</body>
</html>

<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>