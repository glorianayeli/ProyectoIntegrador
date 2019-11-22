    <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Rice Consumption</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <link rel="stylesheet" href="assets/css/libs/bootstrap.css">
        <link rel="stylesheet" href="assets/css/views/normalize.css">
        <script src="<?php echo base_url()?>/assets/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm col-xs-12">
                <a class="navbar-brand text-dark" href="index.php">
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
                            <a class="nav-link text-dark ml-2" href="<?php echo (base_url()); ?>estadisticas">Estadísticas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark ml-2" href="<?php echo (base_url()); ?>c_Registros">Registrar</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark ml-2" href="<?php echo(base_url())?>index/cerrarSesion">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>
    </header>
    <main>
        <br>
        <div class="container" id="">
            <div class="row vh-100">
                <div class="col-12 col-md-10 col-lg-8 my-auto mx-auto">
                    <div class="row">
                        <div class="col-md-7 col-xs-12 col-sm-12">
                            <div class="card text-white bg-warning mb-3"
                                style=" min-width:340px;max-width:340px;opacity:.9">
                                <div class="card-header font-weight-bold">Temperatura</div>
                                <div class="card-body" id="contenedorTemperatura">
                                    <p class="card-text" id="Temperatura" style="font-size:110px;">°C</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-xs-12 col-sm-12">
                            <div class="card text-white bg-info mb-3"
                                style="min-height: 250px; min-width:340px; max-width:340px; opacity: 0.4;">
                                <div class="card-header font-weight-bold">Humedad</div>
                                <div class="card-body" id="contenedorHumedad">
                                    <p class="card-text text-center" id="Humedad" style="font-size:110px;"></p>
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
    <script>
    getTemperaturaHumedad();
    function activarTiempo() {
        setTimeout(getTemperaturaHumedad,2000);
    }
    function getTemperaturaHumedad() {
        console.log('xd');
        $.post("<?php echo base_url()?>PaginaPrincipal/showMedicion",
            function (data) {
                var getMedicion = JSON.parse(data);
                var parametrosTemperatura = getMedicion.Temperatura;
                var parametrosHumedad = getMedicion.Humedad;
                //Eliminar y crear la etiqueta canvas
                $('#Temperatura').remove();
                $('#contenedorTemperatura').append("<p class='card-text' id='Temperatura' style='font-size:110px;'>"+parametrosTemperatura+"°C</p>");
                $('#Humedad').remove();
                $('#contenedorHumedad').append("<p class='card-text' id='Humedad' style='font-size:110px;'>"+parametrosHumedad+"</p>");
        });
        activarTiempo();
    }   
    document.addEventListener('DOMContentLoaded', function (event) {
        activarTiempo();
    });
    </script>
</body>

</html>
<!--card text-white bg-info mb-3-->