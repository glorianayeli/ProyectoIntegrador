<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/libs/bootstrap.css">
    <link rel="stylesheet" href="assets/css/views/normalize.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Estadísticas Usuario</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm col-xs-12">
            <a class="navbar-brand text-dark" href="PáginaPrincipalUsuario.html">
                <h5 class="my-0 mr-md-auto font-weight-bold">RFHealth</h5>
            </a>
            <a href="#navbarSupportedContent">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-dark ml-2" href="EstadisticasUsuario.html">Estadísticas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark ml-2" href="Index.html">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <!--Tablas de humedad y temperatura-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="mt-3 ml-2 col-12" style="max-width: 100%; height: auto; margin: 0 auto;">
                        <canvas id="myChart" width="100" height="125"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="col-lg-12 mt-3 mr-2" style="max-width: 100%; height: auto; margin: 0 auto;">
                        <canvas id="humedad" width="" height="375"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <span class="">Fecha inicio</span>
                    <input type="date" class="form-control col-lg-12" id="fechas">
                </div>
                <div class="col-6">
                    <span class="">Fecha final</span>
                    <input type="date" class="form-control col-lg-12" id="fechas">
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-info mt-3 mb-2 mr-5">Descargar historial</button>
        </div>
    </main>
    <footer>

    </footer>
</body>
<script src="/assets/js/myfristchart.js"></script>

</html>