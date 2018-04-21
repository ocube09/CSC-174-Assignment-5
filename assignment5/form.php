

<?php include 'inc/html-top.inc' ;?> 

<body>

<?php include 'inc/nav.inc' ;?>

<!-- First Container -->
<div class="container-fluid bg-1 text-center home">
  <h3 class="margin"></h3>
  <img src="images/hand.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Globe" width="250" height="250"> <!-- An image of a globe was chosen by the desing artist in order to highlight the international theme of the website -->
</div>

<div class = "container-fluid bg-3 text-center " >
<h1> Contact Us </h1>
	<form method="post" action="welcome.php">

		<div class="box">
			Name:      
			<input type="text" name="name" id="name" required autofocus>
			<label for="name"></label>
		</div>

		<div class="box">
			Email:     
			<input type="text" name="email" id="email" required>
			<label for="email"></label>
		</div>

		<div class="box">
			Telephone:
			<input type="text" name="phone" id="phone" required>
			<label for="phone"></label>
		</div>	

<fieldset>
	
		
Describe what your major is and your reason for choosing it
		<textarea name="textarea" id="textarea">
		</textarea>
		<input type="submit" value="Send">

</fieldset>

</form>

</div>

<!-- Footer with the name of the Design Artist -->
<footer class="container-fluid bg-4 text-center">
  <p>Designed by Fiyinfoluwa Oluyinka </p> 
</footer>


</body>

</html>