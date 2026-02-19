<?php 
include "header.php";
include "connexionPdo.php";

$num = $_GET['num'];

$req = $monPdo->prepare("delete from nationalite where num = :num");
$req->bindParam(':num', $num);
$req->execute();

if($req->rowCount() == 1) {
    $_SESSION['message'] = ["success" => "La nationalité a bien été supprimée"];
}else{
    $_SESSION['message'] = ["danger" => "La nationalité n'a pas été supprimée"];
}

header('Location: listeNationalites.php');
exit();
?>


