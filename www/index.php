<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row" style="justify-content:center;">
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

      <h1><span class="badge badge-secondary">MENÚ PRINCIPAL</span></h1>

      <div class="menu_pelis" style="justify-content:center;">
        <div class="row">
          <div class="col-sm">
            <h2 >PELÍCULAS</h2>
            <a href="./peliculas.php">
              <input type="image" src="./media/utils/peliculas.jpg" width="250" height="250"/>
            </a>
          </div>
          <div class="col-sm">
            <h2>ELENCO</h2>
            <a href="./elenco.php">
              <input type="image" src="./media/utils/elenco.jpg" width="250" height="250"/>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>