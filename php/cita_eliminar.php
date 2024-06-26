<?php
$citas_id_del=limpiar_cadena($_GET['citas_id_del']);
//El usuaro existe 
$check_cita=conexion();
$check_cita=$check_cita->query("SELECT id FROM citas WHERE id ='$citas_id_del' ");
if ($check_cita->rowCount()==1) {
    
   
    
        $eliminar_cita=conexion();
        $eliminar_cita=$eliminar_cita->prepare("DELETE FROM citas WHERE id =:id ");
        
        $eliminar_cita->execute([":id"=>$citas_id_del]);
        if ($eliminar_cita->rowCount()==1) {
            echo '<div class="alert alert-success" role="alert">Cita eliminada exitosamente.</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Ocurrio un error inesperado.</div>';
        }
        $eliminar_cita=null;
        
    
    
    
}else{
    echo '<div class="alert alert-danger" role="alert">La cita seleccionada no existe.</div>';
}
$check_cita=null;