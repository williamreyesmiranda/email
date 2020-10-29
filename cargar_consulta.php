<?php
include "conexion.php";
$pedido = $_POST['consulta'];
$query = mysqli_query($conexion, "SELECT  pe.idpedido, pe.num_pedido, pe.cliente, pe.asesor, pe.fecha_inicio, pe.fecha_fin, pe.dias_habiles, pr.siglas, es.estado FROM pedidos pe 
                                INNER JOIN procesos pr 
                                ON pr.idproceso=pe.procesos
                                INNER JOIN estado es 
                                ON es.id_estado=pe.estado
                                WHERE num_pedido=$pedido");
@$verifica = mysqli_num_rows($query);
@$consult = mysqli_fetch_array($query);

if ($verifica > 0) {
    $cliente = $consult['cliente'];
    $inicio = $consult['fecha_inicio'];
    $fin = $consult['fecha_fin'];
    $asesor= $consult['asesor'];
    $estado=$consult['estado'];
    $siglas=$consult['siglas'];

    $query_unds=mysqli_query($conexion,"SELECT SUM(unds) as 'SUMA'FROM pedidos WHERE num_pedido=$pedido");
    $consult_unds=mysqli_fetch_array($query_unds);
    $unds=$consult_unds['SUMA'];

?>
            <h1 class="display-7 mt-5">Pedido: <?php echo $pedido; ?></h1>
            <p class="mt-5"> <strong>Cliente:</strong>  <?php echo $cliente; ?></p>
            <p class=""><strong>Fecha Inicio:</strong> <?php echo $inicio; ?></p>
            <p class=""><strong>Fecha Entrega:</strong> <?php echo $fin; ?></p>
            <p class=""><strong>Procesos:</strong> <?php echo $siglas; ?></p>
            <p class=""><strong>Comercial:</strong>  <?php echo $asesor; ?></p>
            <p class=""><strong>Unds:</strong> <?php echo $unds;?></p>
            <p class="mt-4"><strong>Estado:</strong> <?php echo $estado;?></p>

<?php

} else { ?>

            <h1 class="display-6 mt-5">El numero no fue ingresado correctamente o no está dentro de nuestra base de datos </h1>
            <hr>
            <h1 class="display-6">Por favor ingrese conrrectamente el número de pedido </h1>

        

<?php
}

?>