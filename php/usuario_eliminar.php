<?php
$user_id_del=limpiar_cadena($_GET['user_id_del']);
//El usuaro existe 
$check_usuario=conexion();
$check_usuario=$check_usuario->query("SELECT usuario_id FROM usuario WHERE usuario_id ='$user_id_del' ");
if ($check_usuario->rowCount()==1) {
    
   
    
        $eliminar_usuario=conexion();
        $eliminar_usuario=$eliminar_usuario->prepare("DELETE FROM usuario WHERE usuario_id =:id ");
        
        $eliminar_usuario->execute([":id"=>$user_id_del]);
        if ($eliminar_usuario->rowCount()==1) {
            echo'<div class="notification is-success">
         
          <strong>!El usuario se elimino exitosamente</strong>
       </div>';
        } else {
            echo '
        <div class="notification is-danger">
            <strong>¡Ocurrio un error inesperado!</strong>
           Ocurrioun error inesperado en la peticion
        </div>
        ';
        }
        $eliminar_usuario=null;
        
    
    
    
}else{
    echo '
    <div class="notification is-danger">
        <strong>¡Ocurrio un error inesperado!</strong>
       El usuario selecionado no existe
    </div>
    ';
}
$check_usuario=null;