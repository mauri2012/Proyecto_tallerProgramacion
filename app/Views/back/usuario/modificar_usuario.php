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
   
    }//dd($datos); 
    ?> 
    <h2>Modificar usuario</h2>
    <form method="post" action="<?php echo base_url('/cambios-form') ?>">
      <div class="row">
      <div class="my-3 col-md-6">
        <input class="form-control" type="hidden" value="<?php echo set_value('id',$datos[0]['id']);?>" name="id" >
        <input class="form-control" type="hidden"  value="<?php echo set_value('direccion_id',$datos[0]['direccion_id']);?>" name="direccion_id" >            
            <label class="form-label" >Nombre:</label>
            <input class="form-control" type="text" placeholder="Ingrese Nombre" value="<?php echo set_value('nombre',$datos[0]['nombre']);?>" name="nombre" >
            <!-- Error -->
          <?php if ($validation->getError('nombre')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('nombre'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="my-3 col-md-6">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" name="apellido" class="form-control" value="<?php echo set_value('apellido',$datos[0]['apellido'])?>" placeholder="Apellido">
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
            <input class="form-control" type="email" placeholder="Ingrese Email" name="email" value="<?php echo set_value('email',$datos[0]['email']) ?>">
            <!-- Error-->
            <?php if($validation->getError('email')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('email');?>
              </div>
            <?php } ?>
        </div>
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuario</label>
          <input type="text" name="usuario" value="<?php echo set_value('usuario',$datos[0]['usuario'])?>" 
          class="form-control" placeholder="Usuario">
          <!-- Error -->
          <?php if ($validation->getError('usuario')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('usuario'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="my-3">
             <label class="form-label" >provincia:</label>
             <select name="provincia_id" value="" id="provincia_id" class="form-select">
                    <option value="">Seleccionar Provincia</option>
                    <?php foreach($provincias as $provincia){?>
                        <option value="<?=  $provincia['id']?>" <?= set_select('provincia_id', $provincia['id'], $provincia['id'] == $datos[0]['provincia_id']) ?>>
                                <?= $provincia['provincia'] ?>
                        </option>
                    <?php }?>
                </select>
            <?php if($validation->getError('provincia_id')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('provincia_id');?>
              </div>
            <?php }?>
        </div>
        <?php if(session()->get('perfil_id')==1) {?>
        <div class="my-3">
             <label class="form-label" >perfil:</label>
             <select name="perfil_id" value="" id="perfil_id" class="form-select">
                    <option value="">Seleccionar Perfil</option>
                    <?php foreach($perfiles as $perfil){?>
                        <option value="<?=  $perfil['id']?>" <?= set_select('perfil_id', $perfil['id'], $perfil['id'] == $datos[0]['perfil_id']) ?>>
                                <?= $perfil['descripcion'] ?>
                        </option>
                    <?php }?>
                </select>
            <?php if($validation->getError('perfil_id')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('perfil_id');?>
              </div>
            <?php }?>
        </div>

        <div class="my-3">
            <label class="form-label" >baja:</label>
         
            <select name="baja" value="" id="baja" class="form-select">
                    <option value="SI" <?php echo set_select('baja', 'SI', $datos[0]['baja'] == 'SI');?> >SI</option>
                    <option value="NO" <?php echo set_select('baja', 'NO', $datos[0]['baja'] == 'NO');?>>NO</option>
                    
                </select>
  
            <?php if($validation->getError('baja')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('baja');?>
              </div>
            <?php }?>
            
        </div>
        <?php }else{ ?>
          <input type="hidden" name="baja" value="<?= $datos[0]['baja']?>">
           <input type="hidden" name="perfil_id" value="<?= $datos[0]['perfil_id']?>">
          <?php } ?>
          <div class="my-3">
            <label class="form-label" >Codigo Postal:</label>
            <input class="form-control" type="text" name="CodigoPostal" value="<?php echo set_value('codigoPostal',$datos[0]['CodigoPostal'])?>" placeholder="ex:R3400">
  
            <?php if($validation->getError('Codigo Postal')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('Codigo Postal');?>
              </div>
            <?php }?>
            
        </div>
        <div class="my-3">
            <label class="form-label" >Ciudad:</label>
            <input class="form-control" type="text" value="<?php echo set_value('ciudad',$datos[0]['ciudad'])?>" name="ciudad">
  
            <?php if($validation->getError('ciudad')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('ciudad');?>
              </div>
            <?php }?>
            
        </div>
        <div class="my-3">
            <label class="form-label" >barrio:</label>
            <input class="form-control" type="text" name="barrio" value="<?php echo set_value('barrio',$datos[0]['barrio']);?>">
  
            <?php if($validation->getError('barrio')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('barrio');?>
              </div>
            <?php }?>
            
        </div>
        <div class="my-3 row">
              <div class="col-6">
            <label class="form-label" >Calle:</label>
            <input class="form-control" type="text" name="calle" value="<?php echo set_value('calle',$datos[0]['calle']);?>">
  
            <?php if($validation->getError('calle')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('calle');?>
              </div>
            <?php }?>
            </div>
            <div class="col-6">
          <label class="form-label" >Altura:</label>
            <input class="form-control" type="text" name="altura" placeholder="ex: 1750" value="<?php echo set_value('altura',$datos[0]['altura']);?>">
  
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

    </div>
    </div>
    

</section>
