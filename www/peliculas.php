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

      <!-- ADD movie FORM -->
      <div class="card card-body">
        <form action="save_movie.php" method="POST">
          <div class="form-group">
            <input type="text" name="movie_name" class="form-control" placeholder="Nombre pelicula" autofocus>
          </div>
          <div class="form-group">
            <textarea name="movie_sinopsis" rows="2" class="form-control" placeholder="Sinopsis"></textarea>
          </div>
          <div class="form-group">
            <input  type="text" name="movie_clasification" rows="2" class="form-control" placeholder="Clasificación"></input>
          </div>
          <div class="form-group">
            <input  type="text" name="movie_poster" rows="2" class="form-control" placeholder="Poster"></input>
          </div>
          <div class="form-group">
            <input type="text" name="movie_video" class="form-control" placeholder="Video" autofocus>
          </div>
          <div class="form-group">
            <input type="number" name="id_estudio" class="form-control" placeholder="ID de estudio" autofocus>
          </div>
          <input type="submit" name="save_movie" class="btn btn-success btn-block" value="Guardar pelicula">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>SINOPSIS</th>
            <th>CLASIFICACIÓN</th>
            <th>POSTER</th>
            <th>VIDEO</th>
            <th>ESTUDIO</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM pelicula";
          $result_movies = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_movies)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>  
            <td><strong><?php echo $row['nombre']; ?></strong></td>
            <td><?php echo $row['sinopsis']; ?></td>
            <td><?php echo $row['clasificacion']; ?></td>
            <td>
              <img src="<?php echo $row['poster'];?>" alt="<?php echo $row['poster'];?>" width="150" height="200">
            </td>
            <td>
              <video width="180" height="140" controls>
                <source src="<?php echo $row['video']; ?>" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </td>
            <td><?php echo $row['id_estudio']; ?></td>
            <td>
              <a href="edit_movie.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_movie.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>