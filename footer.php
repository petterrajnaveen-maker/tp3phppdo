
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal premier div mettre un id -->
<div id="modalSuppression"class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation de suppression</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> Voulez vous supprimer cette nationalité </p>
      </div>
      <div class="modal-footer">
        <a href="supprimeNationalite.php?num=" class="btn btn-secondary" data-dismiss="modal"id="btnSuppr">Supprimer</a>
        <button type="button" class="btn btn-primary">Ne pas Supprimer</button>
      </div>
    </div>
  </div>
</div>

<footer class="container">
  <p>&copy; Tp3 Naveen 2025-2026</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 <script type="text/javascript">

  $("a[data-suppression]").click(function(){
    var lien = $(this).attr("data-suppression");// on récupère le lien du bouton"poubelle"
    var message = $(this).attr("data-message");// on récupère le lien du bouton"poubelle"
    $("#btnSuprr").attr("href,lien");// on écrit  ce lien  sur le bouton"supprimer"
    $(".modal-body").text(message);
  })

 </script>    
  </body>
</html>
