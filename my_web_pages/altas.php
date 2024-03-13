<?php include("db.php"); ?>
<?php include("includes/header.php") ?>


<?php if (isset($_SESSION['message_type'])) {
  if ($_SESSION['message_type'] == "success") { ?>
    <div class="alert alert-success alert-dismissible fade show snackbar-dao" role="alert">
      <?= $_SESSION['message'] ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php session_unset();
  } elseif ($_SESSION['message_type'] == "error") { ?>
    <div class="alert alert-danger alert-dismissible fade show snackbar-dao" role="alert">
      <?= $_SESSION['message'] ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php session_unset();
  }
}  ?>

<div class="p-5">
  <form action='insert_user.php' method="POST">

    <div class="row">
      <div class="col-sm-12 col-lg-6">
        <div class="mb-3 ">
          <label for="validationDefaultUsername" class="form-label">Nombre</label>
          <input type="text" name="name" class="form-control" id="validationDefaultUsername" aria-describedby="emailHelp" required>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6">
        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <div class="input-group mb-3">
          <input type="text" name="email-user" class="form-control" placeholder="Username" aria-label="Username" required>
          <span class="input-group-text">@</span>
          <input type="text" name="email-domain" class="form-control" value="bluetab.net" aria-label="Server" readonly>
        </div>
      </div>
      <div class="col-12">
        <label for="exampleInputEmail1" class="form-label">Puesto</label>
        <div class="mb-3">
          <select name="position" class="form-select" aria-label="Default select example">
            <option value="Ingestas">Ingestas</option>
            <option value="CdU">CdU</option>
            <option value="Por definir">Por definir</option>
          </select>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>


  </form>
</div>

<?php include("includes/footer.php") ?>