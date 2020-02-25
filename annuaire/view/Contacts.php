<?php require'enteteSimpleAdmin.php';?>
<div class="card">

            <!-- Card body -->
            <div class="card-body">

                <!-- Material form register -->
                <form method="POST" action="?file=traitementcontact">
                    <p class="h4 text-center py-4">Veuillez nous contacter</p>
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
					<div class="form-group purple-border">
                       <label for="exampleFormControlTextarea4">Colorful border</label>
                       <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="probleme"></textarea>
                     </div>
                    <div class="text-center py-4 mt-3">
                        <button class="btn btn-cyan" type="submit" name="contacter">Contacter</button>
                    </div>
                </form>
            </div>

        </div>
<?php require'pied.php';?>