<?php include("db.php"); ?>
<?php include("includes/header.php") ?>
<?php
include('db.php');

$email = $_GET['id'];
$query = "SELECT name,email,position FROM users WHERE email = '$email'";

$result = $mysqli->query($query);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$position = $row['position'];
?>
<form action="update_user.php" method="POST" class="p-3">
  <div class="row">
    <div class="col-sm-12 col-lg-6">
      <div class="mb-3 ">
        <label for="validationDefaultUsername" class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" id="validationDefaultUsername" aria-describedby="emailHelp" value="<?php echo $name ?>" required>
      </div>
    </div>
    <div class="col-sm-12 col-lg-6">
      <label for="exampleInputEmail1" class="form-label">Correo</label>
      <div class="input-group mb-3">
        <input type="email" name="email-user" class="form-control" id="Username" aria-label="Username" value="<?php echo $email ?>" readonly>
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

<?php include("includes/footer.php") ?>