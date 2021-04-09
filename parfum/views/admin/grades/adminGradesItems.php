
<?php ob_start(); ?>
<div class="container">

<h1 class="display-6 text-center border border-5 border border-danger font-monospace m-5">Les grades</h1>

  <table class="table table-striped table-border text-center">
      <thead>
          <tr>
              <th>Id</th>
              <th>Nom</th>
              <th colspan="2" class="text-center">Actions</th>
          </tr>
      </thead>
      <tbody>
          <?php foreach ($allGrades as  $grade) { ?>
          <tr>
             <td><?=$grade->getId_g()?></td>
             <td><?=$grade->getNom_g()?></td>
             <td><a class="btn btn-warning" href=""><i class="fas fa-edit" aria-hidden="true"></i></a></td>
            
             <td><a class="btn btn-danger" href=""><i class="fas fa-trash" aria-hidden="true"></i></a></td>
           
          </tr>
          <?php } ?>
      </tbody>
  </table>
</div>
  


<?php 
    $contenu = ob_get_clean();
    require_once('views/templateAdmin.php');
?>
