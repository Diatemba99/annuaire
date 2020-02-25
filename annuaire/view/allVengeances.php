<?php require 'view/enteteAdmin.php'; 

  $db = new Databases();
  $allfilm=$db->allVengeances();
?>
  <table>
    <tr> 
       <div class="row">
           <?php foreach ($allfilm as $value):?>
         
            <div class="col-md-3 mb-4">
                <div class="card default-color-dark">
                    <div class="view">
                        <a href="?file=filmdetail&film=<?= $value->id ?>">
                    <img style="width:370px; heigth:200px;" src="<?= $value->src ?>"> 
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                                 
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text" style="color: white;"><?= $value->titre ?></h4>
                        <p class="card-text white-text"><?php echo $value->nom; ?></p>
                    </div>
                   <a href="?file=filmdelete&film=<?= $value->id ?>" class='btn btn-outline-white btn-md waves-effect'>Supprimer</a>   
                </div>  
            </div>
         <?php endforeach;?> <div></div>
     </div>
   
   </tr>
</table>
<?php require 'view/pied.php'; ?>