
<?php include 'inc/html-top.inc';?>


<body>

<?php include 'inc/nav.inc' ;?>

<!-- First Container -->
<div class="container-fluid bg-1 text-center home">
  <h3 class="margin"></h3>
  <img src="images/" class="img-responsive img-circle margin" style="display:inline" alt="Globe" width="250" height="250"> <!-- Designer should choose a theme that goes with the main topic Pets-->
</div>

<div class = "container-fluid bg-3 text-center " >
<h1> Pet Survey </h1>
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

		<div>
        	What type of Pet do you currently own?<br>
			<input type="radio" name="pet" value="Cat" checked>Cat<br>
  			<input type="radio" name="pet" value="Parrot">Parrot<br>
  			<input type="radio" name="pet" value="Snake">Snake<br>
  		</div>
  		
        
        <div>
        	How many years have you been a Pet owner?<br>
  			<input type="checkbox" name="year" value="<1year" checked>Less than a year<br>
  			<input type="checkbox" name="year" value="1year">A year<br>
 			<input type="checkbox" name="year" value="1year+">more than a year
 		</div>

 		  <input type="submit" name="submit" id="submit" value="submit">

</form>

</div>

<!-- Footer with the name of the Design Artist -->
<footer class="container-fluid bg-4 text-center">
  <p>Designed by Albert Nissim </p> 
</footer>


</body>

</html>