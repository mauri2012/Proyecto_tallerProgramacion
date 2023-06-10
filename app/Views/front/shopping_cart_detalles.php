
<section class="p-5 " style="background-color:#f3a1a0">
    
    <div class="p-5 m-5 container bg-light">
    <div class="p-5">
    <table class="table " id="venta">
            <thead>
                <tr class="table-active">
                    <th>ID</th>
                    <th>producto</th>
                    <th>producto ID</th>
                    <th>cantidad</th> 
                    <th>precio</th>                    
                    
                   
                </tr>    
            </thead>
            <tbody>
                <?php foreach($products as $producto){?>
                <tr>
                <th><?= $producto['id'] ?></th>
                    <th><?= $producto['nombre_producto'] ?></th>
                    <th><?= $producto['producto_id'] ?></th>
                    <th><?= $producto['cantidad'] ?></th>
                    <th><?= number_format($producto['precio'],2)?></th>
                   
                    
                </tr>
                
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>

</section>



<script type="text/javascript" src="assets/DataTables/DataTables-1.13.4/js/prueba.min.js"></script>
<script type="text/javascript" src="assets/DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="assets/js/tables.js"></script>
