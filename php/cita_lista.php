<?php 
$inicio=($pagina>0) ? (($pagina*$registro)-$registro): 0;
$tabla="";

 $consulta_datos="SELECT * FROM citas WHERE id_usuario ='".$_SESSION['id']."' ORDER BY nombre ASC LIMIT $inicio,$registro";

 $consulta_total="SELECT COUNT(id) FROM citas WHERE id_usuario ='".$_SESSION['id']."'";
    


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
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th colspan="1">Opciones</th>
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
            <td>'.$rows['nombre'].'</td>
            <td>'.$rows['fecha'].'</td>
            <td>'.$rows['hora'].'</td>
            <td>
                <a href="'.$url.$pagina.'&&citas_id_del='.$rows['id'].'" class="button is-danger is-rounded is-small">Eliminar</a>
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
                No hay Citas Agendadas
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