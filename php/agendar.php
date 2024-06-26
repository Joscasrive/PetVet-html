<?php
require_once("main.php");

    $id = $_POST['id_usuario'];
    $nombre = limpiar_cadena($_POST['nombre']);
    $fecha = date('Y-m-d', strtotime($_POST['fecha']));
    $hora = date('H:i:s', strtotime($_POST['hora']));

    // Validación de fecha y hora
    $fecha_actual = date('Y-m-d');
    
    
    if ($fecha <= $fecha_actual) {
        echo '<div class="alert alert-danger" role="alert">La fecha y hora de la cita deben ser mayores a la fecha y hora actual.</div>';
    exit();
    } else {
        // Guardar Cita
        $guardar =conexion();
        $guardar=$guardar->prepare("INSERT INTO citas(nombre,fecha,hora,id_usuario) VALUES(:nombre,:fecha,:hora,:id_usuario)");
        $marcadores = [
            ":nombre"=>$nombre,
            ":fecha"=>$fecha,
            ":hora"=>$hora,
            ":id_usuario"=>$id
          ];
          $guardar->execute($marcadores);
          if ($guardar->rowCount()==1) {

            echo '<div class="alert alert-success" role="alert">Cita agendada exitosamente.</div>';
               
           } else {
            echo '<div class="alert alert-danger" role="alert">Error al guardar.</div>';
       exit();
               
           }
           $guardar=null;

        
       
    }

?>