<?php include("db.php"); ?>
<?php include("includes/header.php") ?>

<?php if (isset($_SESSION['message'])) { ?>
<div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php session_unset();
} ?>


<br>
<br>
<form action="attendance.php" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-lg-8">
                <table class="table table-bordered table-hover border-primary">
                    <thead>
                        <tr>
                            <th style="width: 65%">Nombre</th>
                            <th style="width: 35%">Asistencia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

            $query = "SELECT name, email, position FROM users";

            $result = $mysqli ->query($query) ;
            while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['name']?></td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="html"
                                        name="asistencia['<?php echo $row['email']; ?>']" value="present">
                                    <label for="flexRadioDefault1" class="form-check-label">Asistio</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="html"
                                        name="asistencia['<?php echo $row['email']; ?>']" value="excused">
                                    <label for="flexRadioDefault1" class="form-check-label">Justificado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="html"
                                        name="asistencia['<?php echo $row['email']; ?>']" value="absent" checked>
                                    <label for="flexRadioDefault1" class="form-check-label">Falto</label>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
            <div class="col-md-3 col-lg-4 col-sm-12">
                <label for="exampleFormControlTextarea1" class="form-label">Notas</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="9" name="notas"></textarea>
                <br>
                <button type="submit" class="btn btn-primary position-relative">Guardar asistencia
                </button>
                <br>
                <br>
            </div>
        </div>
    </div>
</form>


<?php include("includes/footer.php") ?>