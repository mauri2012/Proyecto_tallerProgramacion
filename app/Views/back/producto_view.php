<section class="p-5" style="background-color:#f3a1a0">
    
    <div class="p-5  container bg-light">
    <a type="input" class="btn btn-success" href="<?php echo base_url('/productRegister')?>">alta productos</a>
    <?php if($bandera){?>
    <a type="input" class="btn btn-danger" href="<?php echo base_url('/productoview?bandera='.false)?>">productos NO eliminados</a>
    <?php }else{?>
    <a type="input" class="btn btn-danger" href="<?php echo base_url('/productoview?bandera=' . true)?>">productos  eliminados</a>
    <?php } ?>
    <table class="table" id="venta">
            <thead class="table-active">
                <tr>
                    <th>Nombre Producto</th>
                    <th>Categoria</th>
                    <th>precio</th>
                    <th>stock</th>
                    <th>stock minimo</th>
                    <th>eliminado</th>
                    <th>imagen name</th>
                    <th>eliminar</th>
                    <th>editar</th>
                </tr>    
            </thead>
            <tbody>
                <?php foreach($products as $producto){?>
                <tr>
                    
                    <th><?= $producto['nombre_producto'] ?></th>
                    <th><?= $producto['descripcion'] ?></th>
                    <th><?= $producto['precio_venta'] ?></th>
                    <th><?= $producto['stock'] ?></th>
                    <th><?= $producto['stock_min'] ?></th>
                    <th><?= $producto['eliminar']?></th>
           <th> <?php $img=$producto['imagen']?>
                <img src="<?php echo base_url()?>/assets/uploads/<?=$img?>" alt="" width='100px'></th>
                    
                    <?php if($producto['eliminar']=='NO'){?>
                        <th><a type="input" class="btn btn-danger" href="<?php echo base_url('CambiarEliminarNO?id=' . $producto['id'] )?>">X</a></th>
                    <?php }else{ ?>
                    <th><a type="input" class="btn btn-success" href="<?php echo base_url('CambiarEliminarSI?id=' . $producto['id'])?>">*</a></th>
                    <?php } ?>
                    <th><a type="input" class="btn btn-secondary" href="<?php echo base_url('editarProducto?id='. $producto['id'])?>">cambiar</a></th>
                    
                </tr>
                
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<script type="text/javascript" src="assets/DataTables/DataTables-1.13.4/js/prueba.min.js"></script>
<script type="text/javascript" src="assets/DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="assets/js/tables.js"></script>