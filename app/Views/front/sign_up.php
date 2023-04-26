<section class="container-fluid py-5 " style="background-color:#f3a1a0">
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 border p-3" style="background:white">
    <h2>Registrarse</h2>
    <form action="">
        <div class="my-3">
            <label class="form-label" >Nonmbre:</label>
            <input class="form-control" type="text" placeholder="Ingrese Nombre" name="name" required>
        </div>
        <div class="my-3">
            <label class="form-label" >Email:</label>
            <input class="form-control" type="email" placeholder="Ingrese Email" name="email" required>
        </div>
        <div class="my-3">
            <label class="form-label" >Contraseña:</label>
            <input class="form-control" type="password" placeholder="Ingrese Contraseña" name="pswd" required>
        </div>
        <div class="my-3">
            <label class="form-label" >Repita Contraseña:</label>
            <input class="form-control" type="password" placeholder="Ingrese Contraseña" name="pswdAgain" required>
        </div>
        <div class="my-3">
            <label class="form-label" >dia de nacimiento:</label>
            <input class="form-control" type="date" name="birthday" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-success">reiniciar</button>
    </form>
    <a href="<?php echo base_url('log_in')?>">¿ya tienes una cuenta?Inicia Sesion</a>
    </div>
    </div>
    

</section>