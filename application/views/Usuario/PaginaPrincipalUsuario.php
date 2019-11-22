    <main onload="actualizarDatos()">
        <br>
        <div class="container" id="recargarMediciones">
            <div class="row vh-100">
                <div class="col-12 col-md-10 col-lg-8 my-auto mx-auto">
                    <div class="row">
                        <div class="col-md-7 col-xs-12 col-sm-12">
                            <div class="card text-white bg-warning mb-3"
                                style=" min-width:340px;max-width:340px;opacity:.9">
                                <div class="card-header font-weight-bold">Temperatura</div>
                                <div class="card-body">
                                    <p class="card-text" style="font-size:110px;"><?php echo $consulta['Temperatura'] ?>°C</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-xs-12 col-sm-12">
                            <div class="card text-white bg-info mb-3"
                                style="min-height: 250px; min-width:340px; max-width:340px; opacity: 0.4;">
                                <div class="card-header font-weight-bold">Humedad</div>
                                <div class="card-body">
                                    <p class="card-text text-center" style="font-size:110px;"><?php echo $consulta['Humedad'] ?></p>
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
    <script src="../assets/js/pagMain.js"></script>
</body>

</html>
<!--card text-white bg-info mb-3-->