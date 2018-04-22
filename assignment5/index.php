<?php include 'inc/html-top.inc' ;?> 

<body>

<?php include 'inc/nav.inc' ;?>



<!-- Container which has a picture of pet owners with pets to visually present the  -->

<div class="container-fluid bg-1 text-center home">
  <img src="images/" class="img-responsive img-circle margin" style="display:inline" alt="Globe" width="250" height="250"> 
</div>


<!-- This container is for the description of the main topic Pets.-->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin"> Pets </h3>
 
  <p> A pet or companion animal is an animal kept primarily for a person's company, protection, or entertainment rather than as a working animal, livestock, or laboratory animal. Popular pets are often noted for their attractive appearances, intelligence, and relatable personalities. Two of the most popular pets are dogs and cats.</p>

</div>

<!-- The design artist also chose to use a grid layout in this case, so that the 3 Pets can each have their pages side by side in the same container, thus improving the overall readability of the webpage. -->

<div class="container-fluid bg-3 text-center">    
  <h3 class="margin"> Different types of Pets </h3><br>
  <div class="row">

    <div class="col-sm-4">
      <img src="images/cat.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Cat" width="250" height="250">
      <p> The domestic cat (Felis silvestris catus or Felis catus)is a small, typically furry, carnivorous mammal. They are often called house cats when kept as indoor pets or simply cats when there is no need to distinguish them from other felids and felines. They are often valued by humans for companionship and for their ability to hunt vermin. There are more than seventy cat breeds recognized by various cat registries.Cats are similar in anatomy to the other felids, with a strong flexible body, quick reflexes, sharp retractable claws and teeth adapted to killing small prey.</p>

      <a href="cat.php" class="btn btn-default btn-lg">
      <span class="glyphicon"></span> More about Cats
      </a>  

    </div>

    <div class="col-sm-4"> 
      <img src="images/parrot.jpg" class="img-responsive img-circle margin top " style="display:inline" alt="Parrot" width="250" height="250">
      <p>Parrots may not make good pets for most people because of their natural wild instincts such as screaming and chewing. Although parrots can be very affectionate and cute when immature, they often become aggressive when mature (partly due to mishandling and poor training) and may bite, causing serious injury.For this reason, parrot rescue groups estimate that most parrots are surrendered and rehomed through at least five homes before reaching their permanent destinations or before dying prematurely from unintentional or intentional neglect and abuse.</p>

      <a href="parrot.php" class="btn btn-default btn-lg">
      <span class="glyphicon"></span> More about Parrots
      </a>

    </div>

    <div class="col-sm-4"> 
      <img src="images/snake.jpg" class="img-responsive img-circle margin top " style="display:inline" alt="Snake" width="250" height="250">
      <p>In the Western world, some snakes (especially docile species such as the ball python and corn snake) are kept as pets. To meet this demand a captive breeding industry has developed. Snakes bred in captivity tend to make better pets and are considered preferable to wild caught specimens.Snakes can be very low maintenance pets, especially compared to more traditional species. They require minimal space, as most common species do not exceed 5 feet (1.5 m) in length. Pet snakes can be fed relatively infrequently, usually once every 5 to 14 days. Certain snakes have a lifespan of more than 40 years if given proper care.</p>

      <a href="snake.php" class="btn btn-default btn-lg">
      <span class="glyphicon"></span> More about Snakes
      </a>

    </div>

  </div>
</div>

<!-- Footer with the name of the Design Artist -->
<footer class="container-fluid bg-4 text-center">
  <p>Designed by Albert Nissim </p> 
</footer>

</body>
