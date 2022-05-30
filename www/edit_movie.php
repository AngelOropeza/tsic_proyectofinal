<?php
include("db.php");
$nombre = ""; 
$sinopsis = ""; 
$clasificacion = ""; 
$poster = ""; 
$video = ""; 
$id_estudio = 0; 
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM pelicula WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre']; 
    $sinopsis = $row['sinopsis']; 
    $clasificacion = $row['clasificacion']; 
    $poster = $row['poster']; 
    $video = $row['video']; 
    $id_estudio = $row['id_estudio']; 
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['movie_name']; 
  $sinopsis = $_POST['movie_sinopsis']; 
  $clasificacion = $_POST['movie_clasification']; 
  $poster = $_POST['movie_poster']; 
  $video = $_POST['movie_video']; 
  $id_estudio = $_POST['id_estudio']; 

  $query = "UPDATE pelicula SET nombre = '$nombre', sinopsis = '$sinopsis', clasificacion = '$clasificacion', poster = '$poster', video = '$video', id_estudio = $id_estudio WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Pelicula actualizadas satisfactoriamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_movie.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input type="text" name="movie_name" class="form-control" placeholder="Nombre producto" autofocus>
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
        <button class="btn-success" name="update">
          Actualizar película
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>

