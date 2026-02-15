<?php include "header.php";
include "connexionPdo.php";
$num=$_GET['num'];
  

$req=$monPdo->prepare("delete from nationalite where num = :num");
$req->bindParam(':num',$num);
$nb=$req->execute();
 
echo'<div class="container mt-5">';
echo '<div class="row">
    <div class="col mt-5">';
if($nb == 1) {
    echo '<div class="alert alert-sucess" role="alert">
    La nationnalité a bien été supprimé'. $message .'</div>';

}else{
    echo '<div class="alert alert-danger" role="alert">
    Petit problème : La nationnalité n\'a pas été supprimé </div>';

  }
  ?>
  </div>
  </div>
  <a href="listeNationalite.php"class="btn btn-primary">Revenir à des nationalités </a>
</div>

<?php include "footer.php";
?>




