<?php include "header.php";
include "connexionPdo.php";
$num=$_GET['num'];
  

$req=$monPdo->prepare("delete from nationalite where num = :num");
$req->bindParam(':num',$num);
$nb=$req->execute();
 
if($nb == 1) {
    $_SESSION['message']=["succes"=>" La nationnalité a bien été supprimé"];
}else{
   $_SESSION['message']=["danger"=>" La nationnalité n'a pas été supprimé"];
  }
  header('location: listeNationalites.php');
  exit();
  ?>




