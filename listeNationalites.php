  <?php include "header.php";
  include "connexionPdo.php";
  $req=$monPdo->prepare("select * from nationalite");
  $req->setFetchMode(PDO::FETCH_OBJ);
  $req->execute();
  $lesNationalites=$req->fetchAll();
  ?>


<div class="container mt-5">
  <div class="row pt-3">
    <div class="col-9"><h2>Liste des nationalités</h2></div>
    <div class="col-3"><a href="formNationalite.php?action=Ajouter"class='btn btn-success'><i class="fas fa-plus-circle"></i>Créer une nationalités </a> </div>

  </div>
  <table class="table table-hover table-striped">
  </div>
    <thead>
      <tr class="d-flex">
        <th scope="col" class="col-md-2">Numéro</th>
        <th scope="col" class="col-md-8">Libellé</th>
        <th scope="col" class="col-md-2">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($lesNationalites as $nationalite)
        { echo "<tr class='d-flex'>";
        echo "<td class='col-md-2'> $nationalite->num </td>";
        echo "<td class='col-md-8'>$nationalite->libelle</td>";
        echo "<td class='col-md-2'>
          <a href='formNationalite.php?action=Modifier&num= $nationalite->num' class='btn btn-primary'><i class='fas fa-pen'></i> </a>
          <a href='#modalSuppression 'data-toggle='modal'data-message=' Voulez vous supprimer cette nationalité ?' data-suppression='supprimerNationalite.php?num$nationalite->num' class='btn btn-danger'><i class='far fa-trash-alt'></i> </a>
          </td>";
          echo"</tr>";
        }

      ?>
     
    </tbody>
  </table>
  

<?php include "footer.php";
?>




