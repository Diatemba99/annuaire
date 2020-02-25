<?php
  require 'enteteAdmin.php';
 $db = new Databases();
$list=$db->recuperationId($_GET['film']);

 ?>
  <div class="container mt-5">
      <?php foreach ($list as  $value): ?>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <!-- Card -->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                      <?php echo "<img class='card-img-top' src=$value->src alt='Card image cap'>"; ?>  
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Titre: <?= $value->titre ?></h4>
                        <!--Text-->
                        <p class="card-text">Description: <?= $value->description ?></p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <!-- <button type="button" class="btn btn-light-blue btn-md">GENRE</button> -->

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                       
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Caracteristique du film</h4>
                        <!--Text-->
                        <p class="card-text">Acteur:<?= $value->realisateur ?></p>
                        <p class="card-text">Date de sortie:<?= $value->datesortie ?></p>
                        <p class="card-text">Réalisateur:<?= $value->realisateur ?></p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
               
            </div>
    </div>
<?php endforeach; ?>
</div>
    <?php  require 'pied.php';?>