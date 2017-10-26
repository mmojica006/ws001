<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Escriba sus credenciales</p>

        <form method="post" id="formIngreso" onsubmit="return validarIngreso()">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Usuario" name="usuarioIngreso" id="usuarioIngreso">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Contraseña" name="passwordIngreso" id="passwordIngreso">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">

                </div>


                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Acceder</button>
                </div>
                <!-- /.col -->
            </div>

        </form>


        <!-- /.social-auth-links -->

        <a href="#">Recordar contraseña</a><br>
        <?php

        $ingreso = new Ingreso();
        $ingreso->ingresoController();

        ?>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


