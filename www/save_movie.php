<?php

include('db.php');

if (isset($_POST['save_movie'])) {
  $name = $_POST['movie_name'];
  $sinopsis = $_POST['movie_sinopsis'];
  $clasification = $_POST['movie_clasification'];
  $poster = $_POST['movie_poster'];
  $video = $_POST['movie_video'];
  $id_estudio = $_POST['id_estudio'];
  $query = "INSERT INTO pelicula(nombre, sinopsis, clasificacion, poster, video, id_estudio) VALUES ('$name', '$sinopsis', '$clasification', '$poster', '$video', $id_estudio)";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Pelicula registrada satisfactoriamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
