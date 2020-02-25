<?php require'view/entete.php'; ?>
        <!-- Card -->
        <div class="card">

            <!-- Card body -->
            <div class="card-body">

                <!-- Material form register -->
                <form method="POST" action="?file=inscription">
                    <p class="h4 text-center py-4">Inscription</p>

                    <!-- Material input text -->
                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="materialFormCardNameEx" class="form-control" name="nom">
                        <label for="materialFormCardNameEx" class="font-weight-light">NOM</label>
                    </div>

                    <!-- Material input email -->
                    <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="materialFormCardEmailEx" class="form-control" name="email">
                        <label for="materialFormCardEmailEx" class="font-weight-light">E-mail</label>
                    </div>

                    <!-- Material input email -->
                    <div class="md-form">
                        <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                        <input type="text" id="materialFormCardConfirmEx" class="form-control" name="telephone">
                        <label for="materialFormCardConfirmEx" class="font-weight-light">Telephone</label>
                    </div>

                    <!-- Material input mdp -->
                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="mdp" id="materialFormCardmdpEx" class="form-control" name="mdp">
                        <label for="materialFormCardmdpEx" class="font-weight-light">Mot de passe</label>
                    </div>

                    <div class="text-center py-4 mt-3">
                        <button class="btn btn-cyan" type="submit" name="inscrire">S'inscrire</button>
                    </div>
                </form>
                <!-- Material form register -->

            </div>
            <!-- Card body -->

        </div>
        <!-- Card -->
<?php require 'view/pied.php'; ?>
