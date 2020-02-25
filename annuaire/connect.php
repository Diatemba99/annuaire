<?php require 'view/entete.php'; ?>

    <div class="modal-dialog" role="document">
    <div class="modal-content">
   <form action="?file=connexion" method="POST">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">INFOS</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate" name="email">
          <label data-error="wrong" data-success="right" for="defaultForm-email">E-mail</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate" name="mdp">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Mot de passe</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default" name="connecter" type="submit">Se connecter</button>
      </div>
   </form>
    </div>
  </div>




<!-- ========================footer ====================================== -->
    <!-- Footer -->
    <footer class="page-footer font-small indigo">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Liens Utiles</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">NETFLIX</a>
                        </li>
                        <li>
                            <a href="#!">ALLOCINE</a>
                        </li>
                        <li>
                            <a href="#!">PLAYVOD</a>
                        </li>
                        <li>
                            <a href="#!">YOUTUBE</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Services</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Publicité</a>
                        </li>
                        <li>
                            <a href="#!">Création contenu</a>
                        </li>
                        <li>
                            <a href="#!">Bandes annonces</a>
                        </li>
                        <li>
                            <a href="#!">Promotions</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">A propos</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Qui sommes-nous? </a>
                        </li>
                        <li>
                            <a href="#!">FAQ-Aide</a>
                        </li>
                        <li>
                            <a href="#!">Conditions d'utilisation</a>
                        </li>
                        <li>
                            <a href="#!">Conseils</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!"><i class="fas fa-map"></i> Sacre coeur 2 Villa 9343 VDN Dakar</a>
                        </li>
                        <li>
                            <a href="#!"><i class="fas fa-mobile"></i> +221 33 896 85 87</a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-facebook"></i> <i class="fab fa-twitter"></i> <i class="fab fa-whatsapp-square"></i> <i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="pt-0">
                            <a href="#!" class="md-form ">
                                <input type="text" id="inputIconEx1" class="form-control">
                                <label for="inputIconEx1"></label>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> Annuaire.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!-- ========================footer ====================================== -->
    

 <!-- JQuery -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>

</body>
</html>