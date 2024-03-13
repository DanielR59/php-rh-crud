<?php include("db.php"); ?>
<?php include("includes/header.php") ?>
<?php if (isset($_SESSION['message_type'])) {
  if ($_SESSION['message_type'] == "success") { ?>
    <div class="alert alert-success alert-dismissible fade show snackbar-dao" role="alert">
      <?= $_SESSION['message'] ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php session_unset();
  }
} ?>
<div class="col-md-12 pt-3 overflow-hidden bg-white table-cont-dao">
  <div class="col-md-12 px-3 overflow-auto position-relative h-100">
    <table class="table table-bordered table-hover border-top table-header-dao">
      <thead class="sticky-top" style="top:-1px">
        <tr>
          <th>nombre</th>
          <th>correo</th>
          <th>puesto</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php

            $query = "SELECT name, email, position FROM users ORDER BY name ASC";

        $result = $mysqli->query($query);
        while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['position'] ?></td>
            <td>
              <a href="delete_user.php?id=<?php echo $row["email"] ?>" class="btn btn-secondary btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                </svg>
              </a>
            </td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
</div>




<?php include("includes/footer.php") ?>