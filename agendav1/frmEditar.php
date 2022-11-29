<?php
$id = $_GET['id'];
require_once 'app/conexion.php';//Se conecta a la BD  devuelve $pdo el objeto de conexion
$sql = 'SELECT * FROM contacto where id= ?';
$query=$pdo->prepare($sql); //Sanitiza y prepara la ejecucion de la consulta
$query->execute([$id]); //Ejecuta la consulta
$contacto = $query->fetch(); //Devuelve solo 1 registro
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <h1 class="mt-3  mb-4 text-center">AGENDA DE CONTACTOS VERSIÓN 1.0</h1>
        <div class="row">
            <div class="col-6">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Informacion del contacto</h4>
                        <form action="app/actualizarContactos.php" method="POST">
                            <!-- no mostrar el id -->
                            <div class="mb-3">
                                <input type="text" class="form-control from-control-sm" id="exampleInputEmail1" name="id" placeholder="id" hidden value="<?php echo $contacto[0]; ?>">
                            </div>    

                            <!-- Para mostrar la id
                            
                            <div class="mb-3">
                                <input type="text" class="form-control from-control-sm" id="exampleInputEmail1" name="id" placeholder="id" readonly value="<?php //echo $contacto[0]; ?>">
                            </div> -->

                            <div class="mb-3">
                                <input type="text" class="form-control from-control-sm" id="exampleInputEmail1" name="nombre" placeholder="nombre" value="<?php echo $contacto[1]; ?>">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control from-control-sm" id="exampleInputEmail1" name="apellido" placeholder="apellido"  value="<?php echo $contacto[2]; ?>">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control from-control-sm" id="exampleInputEmail1" name="email" placeholder="email"value="<?php echo $contacto[3]; ?>">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control from-control-sm" id="exampleInputEmail1" name="telefono" placeholder="telefono" value="<?php echo $contacto[4]; ?>">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control from-control-sm" id="exampleInputEmail1" name="foto" placeholder="foto">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control from-control-sm" id="exampleInputEmail1" name="activo" placeholder="estado">
                            </div>


                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edicion de Contactos</h4>
                        <img src="./assets/agenda.jpeg" class="img-fluid rounded-top" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>