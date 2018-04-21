<?php include 'inc/html-top.inc' ;?> 

<body>

<?php include 'inc/nav.inc' ;?>



<!-- Container which has the Nigerian and Chinese Flags as the background, a representation of the countries where all the students are from -->

<div class="container-fluid bg-1 text-center home">
  <img src="images/hand.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Globe" width="250" height="250"> <!-- An image of a globe was chosen by the desing artist in order to highlight the international theme of the website -->
</div>

<!-- As the design artist, I chose to group the students seperately based on their countries of origin on the home page --> 

<!-- This container is for Olatunde, the Nigerian student who happens to be the odd one out.-->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin"> Nigerian Student </h3>
  <img src="images/olatunde_trad.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Olatunde" width="250" height="250">
  <p> Ola is a Junior at the University of Rochester majoring in Business and minoring in Computer Science. He loves traveling the world and experiencing new cultures. An interesting tidbit about him is that he has been to school in three different countries Nigeria, England and now the US. He speaks two languages English and Yoruba. </p>
  <a href="olatunde.php" class="btn btn-default btn-lg">
    <span class="glyphicon"></span> More about Ola
  </a>
</div>

<!-- This container for the Chinese students has contrasting colours in order to differentiate them from Ola, the Nigerian Student. The design artist also chose to use a grid layout in this case, so that the 3 students can each have their pages side by side in the same container, thus improving the overall readability of the webpage. -->

<div class="container-fluid bg-3 text-center">    
  <h3 class="margin"> Chinese Students </h3><br>
  <div class="row">

    <div class="col-sm-4">
      <img src="images/yidi.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Yidi" width="250" height="250">
      <p>Yidi is a current Senior at the University of Rochester majoring in Computer Science with the track on human computer interaction. He is interested in working on front end development such as web development and mobile app development, and has strong theoretical and practical background in Computer Science and information technology.</p>

      <a href="yidi.php" class="btn btn-default btn-lg">
      <span class="glyphicon"></span> More about Yidi
      </a>  

    </div>

    <div class="col-sm-4"> 
      <img src="images/yuanzhuo.jpg" class="img-responsive img-circle margin top " style="display:inline" alt="Yuanzhuo" width="250" height="250">
      <p> Yuanzhuo is a Freshman at the University of Rochester majoring in Computer Science. Although he has never had a job or internship, he is currently in the market for an internship as front-end web developer for the summer. He enjoys playing sports, watching films and listening to music in is free time, to help him relieve stress. </p>

      <a href="yuanzhuo.php" class="btn btn-default btn-lg">
      <span class="glyphicon"></span> More about Yuanzhuo
      </a>

    </div>

    <div class="col-sm-4"> 
      <img src="images/zhenghao.jpg" class="img-responsive img-circle margin top " style="display:inline" alt="Zhenghao" width="250" height="250">
      <p>Zhenghao is a Senior at the Universiy of Rochester majoring in Financial Economics. He identifies as an enemy of racism, sexualism, and anti-LGBT groups, and strongly opposes any discrimination in every single possible form. Fascinated by Japanese culture, he learned Japanese in the past 4 years, and hopes to live in Japan at some point.</p>

      <a href="zhenghao.php" class="btn btn-default btn-lg">
      <span class="glyphicon"></span> More about Zhenghao
      </a>

    </div>

  </div>
</div>

<!-- Footer with the name of the Design Artist -->
<footer class="container-fluid bg-4 text-center">
  <p>Designed by Fiyinfoluwa Oluyinka </p> 
</footer>

</body>
