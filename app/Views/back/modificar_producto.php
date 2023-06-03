<div class="container-fluid p-5 row"  style="background-color:#f3a1a0">
 
    <?php $validation = \Config\Services::validation(); ?>
    <div class="col-4"></div>
    <div class="bg-light col-5 border" >
        <h2>Modificar Producto</h2>
        <?php if (session()->getFlashdata('success')) {
        echo "
        <div class='mt-3 mb-3 ms-3 me-3 h4 text-center alert alert-success alert-dismissible'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('success') . "
        </div>";
        } ?> 
        <form action="<?php echo base_url('/actualizarProducto')?>" enctype="multipart/form-data" class="g-3" method="post">
            <div class="col-10 my-3">
            <input class="form-control" type="hidden" value="<?php echo set_value('id',$datos['id']);?>" name="id"  >      
                <label class="form-label text-left" >Nombre:</label>
                <input class="form-control" type="text" value=<?php echo set_value('nombre_producto', $datos['nombre_producto']); ?>" placeholder="Ingrese nombre producto" name="nombre_producto">              
                <?php if ($validation->getError('nombre_producto')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('nombre_producto'); ?>
                </div>
                <?php } ?>
            </div>    
            <div class="row">
                <div class="col-5 my-3">
                    <label class="form-label text-left" >Precio:</label>
                    <input class="form-control" type="text" value="<?php echo set_value('precio',$datos['precio'])?>" placeholder="$" name="precio">
                    <?php if ($validation->getError('precio')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('precio'); ?>
                    </div>
                    <?php } ?>        
                </div>
                <div class="col-5 my-3">
                    <label class="form-label" >Precio Venta:</label>
                    <input class="form-control" value="<?php echo set_value('precio_venta', $datos['precio_venta'])?>" type="text" placeholder="$" name="precio_venta">
                    <?php if ($validation->getError('precio_venta')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('precio_venta'); ?>
                    </div>
                    <?php } ?>  
                </div>
            </div>
            <div class="row">
                <div class="col-5 my-3">
                    <label class="form-label text-left" >Stock:</label>
                    <input class="form-control" value="<?php echo set_value('stock',$datos['stock'])?>" type="text" placeholder="stock" name="stock">
                    <?php if ($validation->getError('stock')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('stock'); ?>
                    </div>
                    <?php } ?>                
                </div>
                <div class="col-5 my-3">
                    <label class="form-label" >Stock Minimo:</label>
                    <input class="form-control" value="<?php echo set_value('stock_min',$datos['stock_min'])?>"  type="text" placeholder="stock minimo" name="stock_min">
                    <?php if ($validation->getError('stock_min')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('stock_min'); ?>
                    </div>
                    <?php } ?>  
                </div>
            </div>
            <div class="file my-3 col-8">
            <label class="form-label" >imagen:</label>
                <?php $img=$datos['imagen']?>
                <img src="<?php echo base_url()?>/assets/uploads/<?=$img?>" alt="" width="200px">
                <?php echo $img?>
                <input class="form-control"  value="<?php echo set_value('imagen',$img)?>" type="file"  accept="image, image/png, image/jpg,image/webp" name="imagen">
                <?php if ($validation->getError('imagen')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('imagen'); ?>
                    </div>
                    <?php } ?>  
            </div>
            <div class="my-3 col-8">
            <select name="" value="" id="" class="form-select">
                    <option value="<?php echo set_value('categoria',$datos['categoria_id'])?>"></option>
                    <?php foreach($categorias as $categoria){?>
                    <option value="<?=  $categoria['descripcion']?>" >
                        <?= $categoria['descripcion'] ?>
                    </option>
                    <?php }?>
                </select>
                
                <?php if ($validation->getError('categoria_id')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('categoria_id'); ?>
                    </div>
                    <?php } ?>  
            </div> 
            <div class="my-3 col-8">
                <label class="form-label" >Descripcion:</label>
                <textarea  class="form-control" name="descripcion" id="" cols="30" rows="10"></textarea>
            </div>                         
            <input type="submit" class="btn btn-success">
            <input type="reset" class="btn btn-danger">

    </div>
</div>