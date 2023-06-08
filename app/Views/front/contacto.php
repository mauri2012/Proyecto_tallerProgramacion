<section class="container-fluid py-5 " style="background-color:#f3a1a0">
    <div class="container border">
    <?php
    
    $validation = \Config\Services::validation(); 
     if (session()->getFlashdata('success')) {
        echo "
        <div class='mt-3 mb-3 ms-3 me-3 h4 text-center alert alert-success alert-dismissible'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('success') . "
      </div>";
      } 
      
      
      if(session()->get('perfil_id')==2){
      ?>
     
    <h2 class="bold">Contacto</h2>
    <p class="mb-2">¡Hola! Nos encanta estar en contacto con nuestros clientes y responder cualquier pregunta que puedan tener. Si deseas contactarnos, por favor utiliza cualquiera de las siguientes opciones:</p>
    <section class="container-fluid my-5 pb-5 p-0 m-0">
        <div class="row ">
        
            <div class="col-sm-12 col-md-4">
                <form action="<?php echo base_url('/consulta')?>" method="post">
                    <div class="my-3">
                        <label class="form-label" >Asunto:</label>
                        <input class="form-control" type="text" value="<?php echo set_value('Asunto')?>" placeholder="Enter asunto" name="Asunto">
                        <?php if ($validation->getError('Asunto')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('Asunto'); ?>
                            </div>
                        <?php } ?> 
                    </div>
                    <div class="my-3">
                        <label class="form-label" >Email:</label>
                        <input class="form-control" type="mail" value="<?php echo set_value('Email')?>" placeholder="Enter email" name="Email">
                        <?php if ($validation->getError('Email')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('Email'); ?>
                            </div>
                        <?php } ?> 
                    </div>
                    <div class="my-3">
                        <label class="form-label" >text:</label>
                        <textarea name="descripcion" class="form-control" id="" cols="30" rows="10"><?php echo set_value('descripcion')?></textarea>
                        <?php if ($validation->getError('descripcion')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('descripcion'); ?>
                            </div>
                        <?php } ?> 
                    </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-success">resetear</button>
                </form>
            </div>
            <img src="assets/img/img_contacto.svg" class="col-sm-12 col-md-6 alt="">
            
        </div>

    </section>
    </div>
    <?php }else{ ?>
        <div class="p-5  container bg-light">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Email</th>
                    <th>Asunto</th>
                    <th>mensaje</th>
                    <th>leido</th>
                </tr>    
            </thead>
            <tbody>
                
                <?php foreach($consultas as $consulta){ ?>
                <tr>
                    <th><?= $consulta['id']?></th>
                    <th><?= $consulta['Email'] ?></th>
                    <th><?= $consulta['Asunto'] ?></th>
                    <th><?= $consulta['descripcion'] ?></th>
                    <th><?= $consulta['leido'] ?></th>
                    <?php if($consulta['leido']!='NO'){?>
                        <th><a type="input" class="btn btn-danger" href="<?php echo base_url('leidoActualizar?id='.$consulta['id'] . '&cambio='.$consulta['leido'])?>">X</a></th>
                    <?php }else{ ?>
                    <th><a type="input" class="btn btn-success" href="<?php echo base_url('leidoActualizar?id='.$consulta['id']. '&cambio='.$consulta['leido'])?>">*</a></th>
                    <?php } ?>


                </tr>
                
                <?php } ?>
            </tbody>
        </table>
                    </div>
    </div>
    <?php }?>
</section>