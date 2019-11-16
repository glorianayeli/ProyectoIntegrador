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