<section class="p-5 " style="background-color:#f3a1a0">
    
    <div class="p-5 m-5 container bg-light">
    <div class="p-5">
    <div class="text-center">
        <?php if(session()->get('perfil_id')==1){?>
            <h1>ventas</h1>
        <?php }else{ ?>
            <h1>Compras</h1>
        <?php }?>
    </div>
    <table class="table" id="venta">
            <thead>
                <tr class="table-dark table-active">
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>usuario</th> 
                    <th>precio total</th>                    
                    <th>detalles</th>
                                       
                </tr>    
            </thead>
            <tbody>
                <?php foreach($products as $producto){?>
                <tr>
                    
                    <th><?= $producto['id'] ?></th>
                    <th><?= $producto['fecha'] ?></th>
                    <th><?= $producto['nombre'] ?></th>
                    <th><?= number_format($producto['total_venta'],2)?></th>
                    <th><a type="button"  class="btn btn-primary" href="<?php echo base_url('detalleVenta?venta_id='.$producto['id'])?>">detalles</a></th>
      
                    
                </tr>
                
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
</section>


<script type="text/javascript" src="assets/DataTables/DataTables-1.13.4/js/prueba.min.js"></script>
<script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="assets/js/tables.js"></script>