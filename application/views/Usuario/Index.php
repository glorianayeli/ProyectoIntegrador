
<body>
    <header class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm col-xs-12">
            <a class="navbar-brand text-dark" href="Index.html">
                <h5 class="my-0 mr-md-auto font-weight-bold">RFHealth</h5>
            </a>
        </nav>
    </header>
    <main class="text-center">
        <form class="form-signin my-auto" action="<?php echo(base_url()) ?>index/IniciarSesion" method="POST">
            <img class="" style=" width:25%;" src="assets/img/rfhealth.png" alt="">
            <h1 class="h3 mb-3 font-weight-normal">Inicio de sesión</h1>
            <label for="inputEmail" class="sr-only">Correo:</label>
            
            <input type="email" id="inputEmail" class="form-control col-8 col-lg-4 col-md-4 mx-auto"
            placeholder="Correo Electrónico" required="" autofocus="" name="Correo">

            <label for="inputPassword" class="sr-only">Contraseña:</label>
            
            <input type="password" id="inputPassword" class="form-control col-8 col-lg-4 col-md-4  mx-auto mt-2" placeholder="Contraseña" required="" name="Contraseña">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me" class="mt-2"> Recordarme
                </label>
            </div>
            <div class="">
                <a href="<?php echo (base_url()); ?>c_Registros"><span class="">Registrarse</span></a>
            </div>
            <button class="btn btn-lg btn-primary btn-block col-6 col-md-3 mx-auto mt-2" type="submit">Iniciar
                Sesión</button>
            <p class="mt-5 mb-3 text-muted">© 2017-2019</p>
        </form>
    </main>
    <footer>

    </footer>
</body>

</html>