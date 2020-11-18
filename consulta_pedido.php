
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<style>
.jumbotron{
        color: black;
        background: #00a8a8;
        border-radius: 10px;
        text-transform: uppercase;
    }
</style>

<body>
    <?php include "includes/header.php"; ?>

    <center>
        <div class="container mt-5 ">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                <span class="glyphicon glyphicon-eur"></span>
                <h1 class="display-5">Ingreso de pedido para visualizar información</h1>
                    <div>
                        
                        <input style="width:300px" class="form-control mt-5" type="text" placeholder="Ingrese su pedido" id="consulta" name="consulta" focus>
                    </div>

                   
                        <div id="dato"></div>
                    

                </div>
            </div>
        </div>
    </center>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#consulta').val();
            document.getElementById("consulta").focus();

            $('#consulta').change(function() {
                consulta();
                document.getElementById("consulta").value = "";
                document.getElementById("consulta").focus();
            });




        })

        function consulta() {
            $.ajax({
                type: "POST",
                url: "cargar_consulta.php",
                data: "consulta=" + $('#consulta').val(),


                success: function(r) {
                    $('#dato').html(r);


                }
            });

        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>