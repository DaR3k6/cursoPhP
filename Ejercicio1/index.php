<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <h1>Cuadrado de un cubo</h1>
        <div class="row">
            <div class="col-6">
                <img src="./assets/kamehuase.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-6">
                <form action=" app/cuadradoCubo.php" method="POST">
                    <div class="mb-3">
                        <label for="numero1" class="form-label">Numero 1</label>
                        <input type="text" class="form-control" id="numero1" name="numero1">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>