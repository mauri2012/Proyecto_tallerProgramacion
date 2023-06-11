<section class="container-fluid p-5" style="background-color:#f3a1a0">
    <div class="row login-form  py-5">
        <div class="col-md-4"></div>
        <div class="col-md-4 border p-3 bg-light">
        <?php $validation = \Config\Services::validation(); ?>
            <h2>Alta Categoria</h2>
            <form action="<?php echo base_url('/AltaCategoria')?>" class="g-3" method="post">
     
                <div class="my-3">
                    <label class="form-label" >Categoria:</label>
                    <input class="form-control" type="text" placeholder="Ingrese nombre de la categoria" name="descripcion">
                    <?php if($validation->getError('descripcion')){?>
              <div class="alert alert-danger mt-2">
                  <?= $error=$validation->getError('descripcion');?>
              </div>
            <?php }?>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-success">Reiniciar</button>
            </form>
           
            
        </div>

    </div>
</section>