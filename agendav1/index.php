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
        <h1 class="text-center">AGENDA DE CONTACTOS VERSIÓN 1.0</h1>
        <div class="row">
            <div class="col-6">
                <form action="app/insertarContactos.php" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control from-control-sm" id="exampleInputEmail1" name="nombre" placeholder="nombre">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control from-control-sm" id="exampleInputEmail1" name="apellido" placeholder="apellido">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control from-control-sm" id="exampleInputEmail1" name="email" placeholder="email">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control from-control-sm" id="exampleInputEmail1" name="telefono" placeholder="telefono">
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

            <div class="col-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDO</th>
                            <th scope="col">ACCION</th>
                            <th scope="col">ACCION</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        require_once 'app/listarContectos.php';
                        foreach ($resultado as $llave => $valor) { ?>
                            <tr>
                                <td> <?php echo $valor[0]; ?> </td>
                                <td> <?php echo $valor[1]; ?> </td>
                                <td> <?php echo $valor[2]; ?> </td>
                                <td><button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></td>
                                <td><button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></td>

                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>