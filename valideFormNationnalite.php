  <?php include "header.php";
  include "connexionPdo.php";
  $action=$_GET['action'];
  $num=$_POST['num'];// je récupère le libellé du formulaire
  $libelle=$_POST['libelle'];// je récupère le libellé du formulaire
  $continent=$_POST['continent'];// je récupère le continent du formulaire
  var_dump("insert into nationalite(libelle,numContinent) values(:libelle, :continent)");
  if($action == "Modifier")
    {
    $req=$monPdo->prepare("update nationalite set libelle = :libelle, numContinent= :continent where num = :num");
    $req->bindParam(':num',$num);
    $req->bindParam(':libelle',$libelle);
    $req->bindParam(':continent',$continent);
    }else{
        $req=$monPdo->prepare("insert into nationalite(libelle, numContinent) values(:libelle, :continent)");
        $req->bindParam(':libelle',$libelle);
        $req->bindParam(':continent',$continent);
    }
     $nb=$req->execute();
     $message= $action == "Modifier" ? "modifiée" : "ajoutée";
 
     echo'<div class="container mt-5">';
  echo '<div class="row">
    <div class="col mt-5">';
  if($nb == 1) {
    echo '<div class="alert alert-success" role="alert">
    La nationnalité a bien été'. $message .'</div>';

  }else{
    echo '<div class="alert alert-danger" role="alert">
    La nationnalité n\'a pas été'. $message .'</div>';

  }
  ?>
  </div>
  </div>
  <a href="listeNationalite.php"class="btn btn-primary">Revenir à des nationalités </a>
</div>

<?php include "footer.php";
?>




