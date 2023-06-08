
<div class="row p-5" style="background-color:#f3a1a0">
    <div>
        <form action="<?php echo base_url('producto')?>">
            <select  value="" id="categoria" name="categoria" class="form-select">
                    <option value="0">Selecione una categoria</option>
                    <?php foreach($categorias as $categoria){?>
                    <option value="<?=$categoria['id']?>" >
                        <?= $categoria['descripcion'] ?> 
                    </option>

                    <?php echo $categoria['id']; }?>
            </select>
            <button type="submit" class="btn btn-success">search</button>
        </form>
    </div>    
<?php

    
    foreach($products as $product){
      if($categoriaChoosen==$product['categoria_id'] || $categoriaChoosen==0){  
        $img=$product['imagen'];
        if($product['eliminar']=='NO'){
            
            ?>
        <div class="col-md-4 card">
            <img class="card-img-top" src="<?php echo base_url()?>/assets/uploads/<?=$img?>" alt="Card image">
        <div class="card-header">Precio: <?=$product['precio']?></div>
        <div class="card-header">Nombre: <?=$product['nombre_producto']?></div>
        <div class="card-body">
            <p class="card-text">
                <?=$product['descripcion']?>
            </p>
        </div>
         <?php

            echo form_open('carrito_agrega');
            echo form_hidden('id',$product['id']);
            echo form_hidden('precio',$product['precio_venta']);
            echo form_hidden('nombre',$product['nombre_producto']);
            echo form_hidden('stock',$product['stock']);
            $btn=array(
                'class'=>'btn btn-secondary',
                'value' => 'agregar al carro',
                'name' => 'action'
            );

        
        ?>     
        <div class="card-footer">
        <?php if($product['stock']>$product['stock_min']){    
            echo form_submit($btn);
            echo form_close();            
        }else{?>
            <h3>no stock disponible</h3>
        <?php } ?>

        </div>
    </div>
        
    <?php }}}
    ?>
</div>