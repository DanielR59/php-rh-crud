<?php include("db.php"); ?>
<?php include("includes/header.php") ?>

<?php 
$query = "SELECT name,email FROM users;";
$result = $mysqli ->query($query) ;
?>

<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <form action="generate_report.php" method="POST">
                <select name="user" class="form-select">
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <option value="<?php echo $row['email'];?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                </select>
        </div>
        <div class="col-md-4">

        <button type="submit" class="btn btn-primary ">Generar reporte</button>
        </div>
    </div>
</div>



<?php include("includes/footer.php") ?>