<section class="container-fluid py-5" style="background-color:#f3a1a0">
    <div class="row login-form  py-5">
        <div class="col-md-4"></div>
        <div class="col-md-4 border p-3" style="background-color:white">
         
            <h2>Iniciar Sesion</h2>
            <form action="/enviar-login" class=""g-3>
                <div class="my-3">
                    <label class="form-label" >Email:</label>
                    <input class="form-control" type="email" placeholder="Ingrese email" name="email">
                </div>
                <div class="my-3">
                    <label class="form-label" >Contraseña:</label>
                    <input class="form-control" type="password" placeholder="Ingrese Contraseña" name="email">
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-success">Reiniciar</button>
            </form>
            <a href="<?php echo base_url('sign_up')?>">¿No tienes una cuenta?crea una</a>
        </div>
    </div>
</section>