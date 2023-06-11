<section class="container-fluid p-5" style="background-color:#f3a1a0">
    <div class="row login-form  py-5">
    <?php $validation = \Config\Services::validation(); ?>
    <div class="col-md-4"></div>
        <div class="col-md-4 border p-3 bg-light">
            <?php if(session()->has('msg')){?>
                <div class="alert alert-success p-5">
                    <?= session()->getFlashdata('msg'); ?>
                </div>
            <?php } ?>
            <?php if(!session()->get('logged_in')){  ?>
            <h2>Iniciar Sesion</h2>
            <form action="<?php echo base_url('/enviar-login')?>" class="g-3" method="post">
                <div class="my-3">
                    <label class="form-label" >Email:</label>
                    <input class="form-control" type="email" placeholder="Ingrese email" name="email">
                    <?php if($validation->getError('email')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('email');?>
              </div>
            <?php }?>
                </div>
                <div class="my-3">
                    <label class="form-label" >Contraseña:</label>
                    <input class="form-control" type="password" placeholder="Ingrese Contraseña" name="pass">
                </div>
                <?php if($validation->getError('pass')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('pass');?>
              </div>
            <?php }?>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-success">Reiniciar</button>
            </form>
            <a href="<?php echo base_url('sign_up')?>">¿No tienes una cuenta?crea una</a>
            <?php }?>
        </div>

    </div>
</section>