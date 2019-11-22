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
    <!--Gráficas de humedad y temperatura-->
    <div class="container" id="contenedorGraficas">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="mt-3 ml-2 col-12" style="max-width: 100%; height: auto; margin: 0 auto;" id="contenedorTemperatura">
                        <canvas id="myChart" width="100" height="125"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="col-lg-12 mt-3 mr-2" style="max-width: 100%; height: auto; margin: 0 auto;" id="contenedorHumedad">
                        <canvas id="humedad" width="" height="375"></canvas>
                    </div>
                </div>
            </div>
    </div>
    <!--Botones de descarga-->
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
            <input type="button" id="btnBuscar" class="btn btn-info mt-3 mb-2 mr-5" value="Gráficar">
        </div>
    </main>
    <!--Script de las tablas-->
    <script> 
        crearGrafica();
        function activarTiempo() {
            setTimeout(crearGrafica,2000);
        }
        function crearGrafica(){
            $.post("<?php echo base_url()?>estadisticas/getTemperatura",
                function (data){
                    //activarTiempo();
                    console.log('xd');
                    var parametrosTemperatura = [];
                    var parametrosFecha = [];
                    var parametrosHumedad = [];
                    var getTemperatura = JSON.parse(data);
                    $.each(getTemperatura,function(i,item){
                        parametrosTemperatura.push(item.Temperatura);
                        parametrosFecha.push(item.Fecha);
                        parametrosHumedad.push(item.Humedad);
                    });
                    //Eliminar y crear la etiqueta canvas
                    $('#myChart').remove();
                    $('#contenedorTemperatura').append("<canvas id='myChart' width='100' height='125'></canvas>");
                    $('#humedad').remove();
                    $('#contenedorHumedad').append("<canvas id='humedad' height='375'></canvas>"); 

                    //funcion de crear gráfico
                    var temperatura = document.getElementById('myChart').getContext('2d');
                    var humedad = document.getElementById('humedad').getContext('2d');
                    var chart = new Chart(temperatura, {
                    // The type of chart we want to create
                        type: 'line',
                        
                        // The data for our dataset
                        data: {
                            labels: parametrosFecha,
                            datasets: [{
                                label: 'Temperatura',
                                backgroundColor: 'rgb(255, 215, 0)',
                                borderColor: 'rgb(255, 255, 224)',
                                data: parametrosTemperatura
                            }]
                        },

                        // Configuration options go here
                            options: {}
                    });
                    //humedad chart
                    var chart2 = new Chart(humedad, {
                    // The type of chart we want to create
                    type: 'line',

                    // The data for our dataset
                    data: {
                        labels: parametrosFecha,
                        datasets: [{
                            label: 'Humedad',
                            backgroundColor: 'rgb(32, 178, 170)',
                            borderColor: 'rgb(255, 255, 224)',
                            data: parametrosHumedad
                        }]
                    },

                        // Configuration options go here
                        options: {}
                    });
                });
                activarTiempo();
        }
    document.addEventListener('DOMContentLoaded', function(event){
        activarTiempo();
    });
    </script>
    </body>
</html>