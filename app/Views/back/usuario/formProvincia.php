<section class="container-fluid p-5" style="background-color:#f3a1a0">
    <div class="row login-form  py-5">
        <div class="col-md-4"></div>
        <div class="col-md-4 border p-3 bg-light">
        <?php $validation = \Config\Services::validation(); ?>
            <h2>Alta Provincia</h2>
            <form action="<?php echo base_url('/AltaProvincia')?>" class="g-3" method="post">
     
                <div class="my-3">
                    <label class="form-label" >provincia:</label>
                    <input class="form-control" type="text" placeholder="Ingrese nombre de la provincia" name="provincia">
                    <?php if($validation->getError('provincia')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('provincia');?>
              </div>
            <?php }?>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-success">Reiniciar</button>
            </form>
           
            
        </div>

    </div>
</section>