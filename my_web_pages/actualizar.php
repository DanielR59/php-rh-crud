<?php include("db.php"); ?>
<?php include("includes/header.php") ?>
<?php if(isset($_SESSION['message_type']) ) {
    if($_SESSION['message_type']=="success"){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= $_SESSION['message'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php session_unset(); }
elseif ($_SESSION['message_type']=="error") { ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?= $_SESSION['message'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php session_unset();} }  ?>
<div class="col-md-12">
    <table class="table table-bordered table-hover border-primary">
        <thead>
            <tr>
                <th>nombre</th>
                <th>correo</th>
                <th>puesto</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT name, email, position FROM users";

            $result = $mysqli ->query($query) ;
            while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['position']?></td>
                <td>
                    <a href="edit_user.php?id=<?php echo $row['email']?>" class="btn btn-secondary btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil" viewBox="0 0 16 16">
                            <path
                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                        </svg>
                    </a>
                </td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
</div>

<?php include("includes/footer.php") ?>