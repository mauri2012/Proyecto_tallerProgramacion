<section class="container-fluid py-5 " style="background-color:#f3a1a0">

    <?php $validation = \Config\Services::validation(); ?>
    </div>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 border p-3" style="background:white">
    <?php if (session()->getFlashdata('success')) {
      echo "
      <div class='mt-3 mb-3 ms-3 me-3 h4 text-center alert alert-success alert-dismissible'>
      <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('success') . "
    </div>";
    } ?>'Usuario registrado con exito' 
    <h2>Registrarse</h2>
    <form method="post" action="<?php echo base_url('/enviar-form') ?>">
        <div class="my-3">
            <label class="form-label" >Nombre:</label>
            <input class="form-control" type="text" placeholder="Ingrese Nombre" value="<?php echo set_value('nombre')?>" name="nombre" >
            <!-- Error -->
          <?php if ($validation->getError('nombre')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('nombre'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" name="apellido" class="form-control" value="<?php echo set_value('apellido')?>" placeholder="Apellido">
          <!-- Error -->
          <?php if ($validation->getError('apellido')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('apellido'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="my-3">
            <label class="form-label" >Email:</label>
            <input class="form-control" type="email" placeholder="Ingrese Email" name="email" value="<?php echo set_value('email') ?>">
            <!-- Error-->
            <?php if($validation->getError('email')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('email');?>
              </div>
            <?php } ?>
        </div>
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuario</label>
          <input type="text" name="usuario" value="<?php echo set_value('usuario')?>" class="form-control" placeholder="Usuario">
          <!-- Error -->
          <?php if ($validation->getError('usuario')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('usuario'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="my-3">
            <label class="form-label" >Contraseña:</label>
            <input class="form-control" type="password" placeholder="Ingrese Contraseña" name="pass">
            <?php if($validation->getError('pass')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('pass');?>
              </div>
            <?php }?>
        </div>
        <div class="my-3">
            <label class="form-label" >Repita Contraseña:</label>
            <input class="form-control" type="password" placeholder="Ingrese Contraseña" name="passR">
  
            <?php if($validation->getError('passR')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('passR');?>
              </div>
            <?php }?>
            
        </div>
        <div class="my-3">
            <label class="form-label" >dia de nacimiento:</label>
            <input class="form-control" type="date" name="birthday">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-success">reiniciar</button>
    </form>
    <a href="<?php echo base_url('log_in')?>">¿ya tienes una cuenta?Inicia Sesion</a>
    </div>
    </div>
    

</section>
