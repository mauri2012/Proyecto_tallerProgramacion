<section class="container-fluid py-5 " style="background-color:#f3a1a0">

    <?php $validation = \Config\Services::validation(); ?>
    </div>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5 border p-3" style="background:white">
    <?php if (session()->getFlashdata('success')) {
      echo "
      <div class='mt-3 mb-3 ms-3 me-3 h4 text-center alert alert-success alert-dismissible'>
      <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('success') . "
    </div>";
    } ?> 
    <h2>Registrarse</h2>
    <form method="post" action="<?php echo base_url('/enviar-form') ?>">
      <div class="row">
      <div class="my-3 col-6">
            <label class="form-label" >Nombre:</label>
            <input class="form-control" type="text" placeholder="Ingrese Nombre" value="<?php echo set_value('nombre')?>" name="nombre" >
            <!-- Error -->
          <?php if ($validation->getError('nombre')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('nombre'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="my-3 col-6">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" name="apellido" class="form-control" value="<?php echo set_value('apellido')?>" placeholder="Apellido">
          <!-- Error -->
          <?php if ($validation->getError('apellido')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('apellido'); ?>
            </div>
          <?php } ?>
        </div>
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
        <div class="row">
        <div class="col-6 my-3">
            <label class="form-label" >Contraseña:</label>
            <input class="form-control" type="password" placeholder="Ingrese Contraseña" name="pass">
            <?php if($validation->getError('pass')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('pass');?>
              </div>
            <?php }?>
        </div>
        <div class="col-6 my-3">
            <label class="form-label" >Repita Contraseña:</label>
            <input class="form-control" type="password" placeholder="Ingrese Contraseña" name="passR">
  
            <?php if($validation->getError('passR')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('passR');?>
              </div>
            <?php }?>
            
        </div>
        </div>
        <div class="my-3">
            <label class="form-label" >Provincia:</label>
            <select name="provincia_id" value="" id="provincia_id" class="form-select">
                    <option value="">Seleccionar Provincia</option>
                    <?php foreach($provincias as $provincia){?>
                        <option value="<?=  $provincia['id']?>">
                                <?= $provincia['provincia'] ?>
                        </option>
                    <?php }?>
                </select>
  
            <?php if($validation->getError('provincia')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('provincia');?>
              </div>
            <?php }?>
            
        </div>
        <div class="my-3">
            <label class="form-label" >Codigo Postal:</label>
            <input class="form-control" type="text" name="CodigoPostal" placeholder="ex:R3400">
  
            <?php if($validation->getError('Codigo Postal')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('Codigo Postal');?>
              </div>
            <?php }?>
            
        </div>
        <div class="my-3">
            <label class="form-label" >Ciudad:</label>
            <input class="form-control" type="text" name="ciudad">
  
            <?php if($validation->getError('ciudad')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('ciudad');?>
              </div>
            <?php }?>
            
        </div>
        <div class="my-3">
            <label class="form-label" >barrio:</label>
            <input class="form-control" type="text" name="barrio">
  
            <?php if($validation->getError('barrio')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('barrio');?>
              </div>
            <?php }?>
            
        </div>
        <div class="my-3 row">
              <div class="col-6">
            <label class="form-label" >Calle:</label>
            <input class="form-control" type="text" name="calle">
  
            <?php if($validation->getError('calle')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('calle');?>
              </div>
            <?php }?>
            </div>
            <div class="col-6">
          <label class="form-label" >Altura:</label>
            <input class="form-control" type="text" name="altura" placeholder="ex: 1750">
  
            <?php if($validation->getError('altura')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('altura');?>
              </div>
            <?php }?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-success">reiniciar</button>
    </form>
    <a href="<?php echo base_url('log_in')?>">¿ya tienes una cuenta?Inicia Sesion</a>
    </div>
    </div>
    

</section>
