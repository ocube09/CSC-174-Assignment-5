
<!-- Navigation bar, As the design artist, I chose to go with a horizontal navigation bar which essentially collapses into a button when the width of the screen is below a certain amount of pixels. In this case when the button is clicked a drop down menu can be seen-->

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>   
        <span class="icon-bar"></span>  
        <span class="icon-bar"></span>                       
      </button>

      <a class="navbar-brand" href="index.php">Pets</a> <!-- Headline which is linked to home or index page -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="cat.php">Cat</a></li>
        <li><a href="parrot.php">Parrot</a></li>
        <li><a href="snake.php">Snake</a></li>
        <li><a href="form.php">Survey</a></li> 
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>