<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>
<style>
    
    .jumbotron {
        background-color: #9ecaca;
        color: #00a8a8;
        border-radius: 10px;
    }
    .jumbotron:hover{
        color: #9ecaca;
        background: #00a8a8;
        border-radius: 10px;
    }
</style>

<body>

    <?php include "includes/header.php"; ?>
    <div class="container mt-5">
        <div class="col">
            <a href="consulta_pedido.php" style=" text-decoration: none">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-5">Consultar Pedido</h1>
                        <hr class="my-4">
                        <p class="lead">Acá los clientes podrán consultar los estados de los pedidos.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="programakamisetas/" style=" text-decoration: none">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-5">Ingresar Control de Piso</h1>
                        <hr class="my-4">
                        <p class="lead">En este link se puede ingresar a la intranet de la empresa.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>





</body>

</html>