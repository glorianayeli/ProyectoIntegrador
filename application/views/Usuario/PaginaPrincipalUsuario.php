<!DOCTYPE html>
<html lang="en">
<!--Titulos de humedad y temperatura, mediciones-->
<!--Cerrar sesión-->
<!--Usuario-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/libs/bootstrap.css">
    <link rel="stylesheet" href="assets/css/views/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <title>Usuario</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm col-xs-12">
            <a class="navbar-brand text-dark" href="Index.html">
                <h5 class="my-0 mr-md-auto font-weight-bold">RFHealth</h5>
            </a>
            <a class="text-primary font-weight-bold text-decoration-none" style="font-size:20px"; href="<?php echo(base_url()); ?>PaginaPrincipal">
                <?php echo($this->session->userdata('user')['nombre']); ?>
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
                        <a class="nav-link text-dark ml-2" href="<?php echo(base_url())?>index/cerrarSesion">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <br>
        <div class="container">
            <div class="row vh-100">
                <div class="col-12 col-md-10 col-lg-8 my-auto mx-auto">
                    <div class="row">
                        <div class="col-md-7 col-xs-12 col-sm-12">
                            <div class="card text-white bg-warning mb-3"
                                style=" min-width:340px;max-width:340px;opacity:.9">
                                <div class="card-header font-weight-bold">Temperatura</div>
                                <div class="card-body">
                                    <p class="card-text" style="font-size:125px;">25°C</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-xs-12 col-sm-12">
                            <div class="card text-white bg-info mb-3"
                                style="min-height: 250px; min-width:340px; max-width:340px; opacity: 0.4;">
                                <div class="card-header font-weight-bold">Humedad</div>
                                <div class="card-body">
                                    <p class="card-text text-center" style="font-size:125px;">45%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>
<!--card text-white bg-info mb-3-->