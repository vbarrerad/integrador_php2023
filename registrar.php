<?php

include("con_db.php");
// if ($conex){
//     echo ("Conectado a DB");
// }
// else{
//     echo ("Ha ocurrido un error");
// }

if (isset ($_POST['enviar'])) {
    if (strlen ($_POST['nombre']) >= 1 && strlen ($_POST['apellido']) >= 1 && strlen ($_POST['tema']) >= 1 ){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tema = $_POST['tema'];
        $consulta = "INSERT INTO  datos ( nombre ,  apellido ,  tema ) VALUES ('$nombre','$apellido','$tema')";
        $resultado = mysqli_query ($conex, $consulta);
            if ($resultado){
                ?>   
           <h3> Inscripción realizada </h3>
            <?php
            }
            else{
                ?>  
            <h3> Ha ocurrido un error </h3>
            <?php
            }

    }
}
else{
    ?>  
    <h3> Por favor, ingresá los datos </h3>
    <?php
    
    }
?>