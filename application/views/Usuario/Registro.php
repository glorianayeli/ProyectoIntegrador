<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm col-xs-12">
            <a class="navbar-brand text-dark">
                <h5 class="my-0 mr-md-auto font-weight-bold">RFHealth</h5>
            </a>
        </nav>
    </header>
    <div class="col-md-8 order-md-1 container">
        <h4 class="mb-3 mt-4">Registro</h4>
        <?php if($registroError = $this->session->flashdata('registroError')):?>
            <div class="alert alert-danger text-center col-4 text-center mx-auto">
                <?php echo $this->session->flashdata('registroError'); ?>
            </div>
        <?php endif; ?>
        <form class="needs-validation col-8 mx-auto" novalidate="" action="<?php echo(base_url('c_Registros/RecibirDatos'))?>" method="POST">
            <div class="mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="nombre">
                <div class="invalid-feedback">
                    Tú nombre es requerido.
                </div>    
            </div>        
            <div class="mb-3">
                <label for="lastName">Primer Apellido</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" name="ApellidoPaterno">
                <div class="invalid-feedback">
                    Tú apellido es requerido.
                </div>
            </div>
            <div class="mb-3">
                <label for="lastName">Segundo Apellido</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" name="ApellidoMaterno">
                <div class="invalid-feedback">
                    Tú apellido es requerido.
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <span class="">Puesto</span>
                        <div class="d-block my-12">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="puesto" type="radio" class="custom-control-input" checked="" required="" value="Gerente">
                            <label class="custom-control-label" for="credit">Gerente</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="puesto" type="radio" class="custom-control-input" required="" value="Jerente de área">
                            <label class="custom-control-label" for="debit">Jefe de área</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="puesto" type="radio" class="custom-control-input" required="" value="Ayudante general">
                            <label class="custom-control-label" for="paypal">Ayudante general</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                    <span class="">Género</span>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="Masculino" name="Genero" type="radio" class="custom-control-input" checked="" required="" value="Masculino">
                            <label class="custom-control-label" for="Masculino">Masculino</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="Femenino" name="Genero" type="radio" class="custom-control-input" required="" value="Femenino">
                            <label class="custom-control-label" for="Femenino">Femenino</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="túcorreo@gmail.com" name="email">
                <div class="invalid-feedback">
                    Por favor ingresa un correo valido.
                </div>
            </div>
            <div class="mb-3">
                <label for="email">Confirmar correo electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="túcorreo@gmail.com" name="emailconfirm">
                <div class="invalid-feedback">
                    Por favor ingresa un correo valido.
                </div>
            </div>
            <div class="mb-3">
                <label for="email">Contraseña</label>
                <input type="password" class="form-control col-6" id="email" name="pass">
                <div class="invalid-feedback">
                    Por favor ingresa un correo valido.
                </div>
            </div>
            <div class="mb-3">
                <label for="email">Confirmar contraseña</label>
                <input type="password" class="form-control col-6" id="email" name="passconfirm">
                <div class="invalid-feedback">
                    Por favor ingresa un correo valido.
                </div>
            </div>
            <hr class="mb-4">
            <div class="d-flex flex-row-reverse bd-highlight">
                <button class="btn btn-primary btn-lg btn-block col-lg-4 mb-4" type="submit">Guardar</button>
            </div>
        </form>
    </div>
