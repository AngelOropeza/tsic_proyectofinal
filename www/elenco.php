<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD elenco FORM -->
      <div class="card card-body">
        <form action="save_elenco.php" method="POST">
          <div class="form-group">
            <input type="text" name="elenco_name" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <textarea name="elenco_sinopsis" rows="2" class="form-control" placeholder="Edad"></textarea>
          </div>
          <div class="form-group">
            <input  type="text" name="elenco_clasification" rows="2" class="form-control" placeholder="Rol"></input>
          </div>
          <div class="form-group">
            <input  type="text" name="elenco_poster" rows="2" class="form-control" placeholder="Nacionalidad"></input>
          </div>
          <div class="form-group">
            <input type="number" name="id_estudio" class="form-control" placeholder="ID de película" autofocus>
          </div>
          <input type="submit" name="save_elenco" class="btn btn-success btn-block" value="Guardar elenco">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EDAD</th>
            <th>ROL</th>
            <th>NACIONALIDAD</th>
            <th>ID_PELICULA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>  
            <td>Scarlett Johansson</td>
            <td>25</td>
            <td>Actriz</td>
            <td>Estadounidense</td>
            <td>1</td>
            <td>
              <a href="edit_movie.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_movie.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>2</td>  
            <td>Guillermo Del Toro</td>
            <td>50</td>
            <td>Director</td>
            <td>Mexicano</td>
            <td>1</td>
            <td>
              <a href="edit_movie.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_movie.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>3</td>  
            <td>Angel Oropeza</td>
            <td>23</td>
            <td>Actor</td>
            <td>Mexicano</td>
            <td>1</td>
            <td>
              <a href="edit_movie.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_movie.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>