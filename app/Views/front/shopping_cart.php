<section class="p-5 " style="background-color:#f3a1a0">
    
    <div class="p-5 m-5 container bg-light">
    <div class="p-5">
        <div class="text-center"><h1>venta</h1></div>
    <table class="table">
            <thead>
                <tr class="table-active">
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