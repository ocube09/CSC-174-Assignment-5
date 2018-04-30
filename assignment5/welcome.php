<?php include 'inc/html-top.inc' ;?> 




<?php
$servername = "localhost";
$username = "urcscon3_fiyin";
$password = "rx577kja";
$dbname = "urcscon3_lagos5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $name = Trim(stripslashes($_POST['name']));

    $email = Trim(stripslashes($_POST['email']));

    $phone = Trim(stripslashes($_POST['phone']));

    $pet = Trim(stripslashes($_POST['pet']));

    $year = Trim(stripslashes($_POST['year']));

$sql = "INSERT INTO survey (name, email, phone, pet, year) VALUES ('$name','$email','$phone','$pet','$year')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<body>

<?php include 'inc/nav.inc' ;?>

<!-- Container which has the Nigerian and Chinese Flags as the background, a representation of the countries where all the students are from, designer should change this to theme that fits the topic of Pets -->
<div class="container-fluid bg-1 text-center home">
  <h3 class="margin"></h3>
  <img src="images/" class="img-responsive img-circle margin" style="display:inline" alt="Globe" width="250" height="250"> <!-- Designer should choose an image that fits the topic of Pets -->
</div>

<div class="container-fluid bg-3 text-center"> 

Success !
The Pet Owner is
<?php echo $name; ?><br><br>
Your email address : <?php echo $email; ?>
has been added.

<footer class="container-fluid bg-4 text-center">
  <p>Designed by Albert Nissim </p> 
</footer>

</div>

<!-- Footer with the name of the Design Artist -->


</body>
</html>
