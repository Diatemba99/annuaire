<?php require'enteteAdmin.php'; ?>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="?file=insererFilm">
                    <p class="h4 text-center py-4">Enregistrement de films</p>

                    <!-- Material input text -->
                    <div class="md-form">
                        <i class="fab fa-tumblr prefix grey-text"></i>
                        <input type="text" id="materialFormCardNameEx" class="form-control" name="titre">
                        <label for="materialFormCardNameEx" class="font-weight-light">Titre</label>
                    </div>

                    <!-- Material input email -->
                    <div class="md-form">
                        <i class="fas fa-text-width prefix grey-text"></i>
                        <input type="text" id="materialFormCardEmailEx" class="form-control" name="description">
                        <label for="materialFormCardEmailEx" class="font-weight-light">Description</label>
                    </div>

                    <!-- Material input email -->
                    <div class="md-form">
                        <i class="far fa-calendar-alt prefix grey-text"></i>
                        <input type="text" id="materialFormCardConfirmEx" class="form-control" name="datesortie">
                        <label for="materialFormCardConfirmEx" class="font-weight-light">Date de sortie</label>
                    </div>

                    <!-- Material input mdp -->
                    <div class="md-form">
                        <i class="fas fa-users prefix grey-text"></i>
                        <input type="text" id="materialFormCardmdpEx" class="form-control" name="realisateur">
                        <label for="materialFormCardmdpEx" class="font-weight-light">Realisateur</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-images prefix grey-text"></i>
                        <input type="text" id="materialFormCardmdpEx" class="form-control" name="src">
                        <label for="materialFormCardmdpEx" class="font-weight-light">mettez l'adresse de l'image</label>
                    </div>
                    <div class="text-center py-4 mt-3">
                        <button class="btn btn-cyan" type="submit" name="enregistrer">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require'pied.php'; ?>