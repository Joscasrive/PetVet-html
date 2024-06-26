<?php 
$inicio=($pagina>0) ? (($pagina*$registro)-$registro): 0;
$tabla="";

    $consulta_datos="SELECT * FROM usuario WHERE usuario_id!='".$_SESSION['id']."' ORDER BY usuario_nombre ASC LIMIT $inicio,$registro";

    $consulta_total="SELECT COUNT(usuario_id) FROM usuario WHERE usuario_id!='".$_SESSION['id']."'";
    


$conexion = conexion();

$datos=$conexion->query($consulta_datos);
$datos=$datos->fetchAll();

$total=$conexion->query($consulta_total);
$total=(int) $total->fetchColumn();

$Npaginas=ceil($total/$registro);


$tabla.='
    <div class="table-container">
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
        <thead>
            <tr class="has-text-centered">
                <th>#</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Rol</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
        
';
if ($total >=1 && $pagina <= $Npaginas) {
    $contador=$inicio+1;
    $paginado_inico=$inicio+1;
    foreach ($datos as  $rows) {
        $tabla.='
            <tr class="has-text-centered" >
            <td>'.$contador.'</td>
            <td>'.$rows['usuario_nombre'].'</td>
            <td>'.$rows['usuario_apellido'].'</td>
            <td>'.$rows['usuario_usuario'].'</td>
            <td>'.$rows['usuario_email'].'</td>
            <td>'.$rows['rol'].'</td>
            <td>
                <a href="index.php?vista=user_update&user_id_up='.$rows['usuario_id'].'" class="button is-success is-rounded is-small">Actualizar</a>
            </td>
            <td>
                <a href="'.$url.$pagina.'&&user_id_del='.$rows['usuario_id'].'" class="button is-danger is-rounded is-small">Eliminar</a>
            </td>
        </tr>
    ';
        $contador++;
    }
    $paginado_final=$contador-1;
} else {
    if($total>=1){
        $tabla.='
            <tr class="has-text-centered" >
            <td colspan="7">
                <a href="'.$url.'1" class="button is-link is-rounded is-small mt-4 mb-4">
                    Haga clic acá para recargar el listado
                </a>
            </td>
        </tr>
    ';

    }else{
        $tabla.='
            <tr class="has-text-centered" >
            <td colspan="7">
                No hay registros en el sistema
            </td>
        </tr>
    ';

    }
}

$tabla.='
</tbody>
</table>
</div>';
if ($total >=0 && $pagina <= $Npaginas){
$tabla.='
    <p class="has-text-right">Mostrando usuarios <strong>'.$paginado_inico.'</strong> al <strong>'.$paginado_final.'</strong> de un <strong>total de '.$total.'</strong></p>
';

}
$conexion =null;

echo $tabla;

if ($total >=1 && $pagina <= $Npaginas){
    
    echo paginador_tabla($pagina,$Npaginas,$url,7);

}