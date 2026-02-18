  <?php include "header.php";
  $action=$_GET['action']; // soit Ajouter soit Modifier
  include "connexionPdo.php";
  if($action == "Modifier")
  {
    $num=$_GET['num'];
    $req=$monPdo->prepare("select * from nationalite where num= :num");
    $req->setFetchMode(PDO::FETCH_OBJ);
    $req->bindParam(':num',$num);
    $req->execute();
    $laNationnalite=$req->fetch();
    // liste des continents
    
  }
   $reqContinent=$monPdo->prepare("select * from continent");
    $reqContinent->setFetchMode(PDO::FETCH_OBJ);
    $reqContinent->execute();
    $lesContinents=$reqContinent->fetchAll();
  ?>

<div class="container mt-5">
<h2 class='pt-3 text-center'> <?php echo $action ?>  une nationalité</h2>
    <form action="valideFormNationnalite.php?action=<?php echo $action ?>" method="post" class="col-md-6 offset-md-3 border border-primary-p-3 rounded">
        <div class="form-group" > 
            <label for='libelle' > Libellé </label>
            <input type="text" class='form-control' id='libelle' placeholder='Saisir le libellé' name='libelle' value= "<?php if($action == "Modifier") {echo $laNationnalite->libelle ;} ?>">
        </div>
        <div class="form-group" > 
            <label for='continent'>Libellé</label>
            <select name="continent" class="form-control">
              <?php
              foreach($lesContinents as $continent){
                $selection=$continent->num == $laNationnalite->numContinent ? 'selected' : '';
               echo "<option value='$continent->num' $selection>$continent->libelle></option>";

              }
              ?>
        </div>
        <input type="hidden" id="num" name="num" value="<?php if($action == "Modifier"){echo $laNationnalite->num;} ?>">
        <div class="row">
        <div class="col"><a href="listeNationalites.php" class='btn btn-warning btn-block'>Revenir à la liste</a></div>
        <div class="col"><button type='submit' class='btn btn-success btn-block'> <?php echo $action ?> </button> </div>
        </div>
    </form>
</div>
    
<?php include "footer.php";
?>




