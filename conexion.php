
<?php
	# conectare la base de datos
    $conn=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_puerto);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($conn));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>

