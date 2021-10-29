<?php

include 'templates/header.php';
include 'global/connection.php';
include 'global/methodsDB.php';
include 'global/conectors.php';


?>


<div class="row" style="margin-top: 2%;">
    <center>
        <h1>Salida Empleados</h1>
    </center>

    <div class="col-12" style="margin-top: 2%;">
        <form action="exit.php" method="POST">
            <div class="form-group">
                <h3>Salida</h3>
                <input type="text" class="form-control" name="codigo" id="codigo" aria-describedby="helpCode" placeholder="Codigo">
            </div>
            <br>
            <button type="submit" name="button" value="egress" class="btn btn-warning">Salida</button>
            <br>
            <br>

        </form>

        <?php if ($mensaje == "Empleado Salio") { ?>

            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="flex-shrink-0 bi me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <?php echo $mensaje; ?>
            </div>

        <?php }
        if ($mensaje == "No se encontro al Empleado") { ?>

            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="flex-shrink-0 bi me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <?php echo $mensaje; ?>
            </div>

        <?php } ?>
    </div>
</div>


<?php

include 'templates/footer.php';