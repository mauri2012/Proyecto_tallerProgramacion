<?php
    /*public function category(){
        $categoriaModel=new categoriaModel();
        
    }*/
?>
<div class="row p-5" style="background-color:#f3a1a0">
<?php
    /*
    <label for="cars">Choose a car:</label>
    <form method="GET" action="<?php echo base_url('/enviarcategoria')?>">
        <select name="cars" id="cars" value="<?php echo set_value('cars')?>">
            <option value="1">1_deportivas</option>
            <option value="2">2_elegantes</option>
            <option value="3">3_casuales</option>
            <option value="0">4_nada</option>
        </select>
        <input type="submit" class="btn btn-primary" >para
    </form>->
  */
    foreach($products as $product){
        $img=$product['imagen'];
        if($product['eliminar']=='NO'){?>
        <div class="col-md-4 card">
            <img class="card-img-top" src="<?php echo base_url()?>/assets/uploads/<?=$img?>" alt="Card image">
        <div class="card-header">Precio: <?=$product['precio']?></div>
        <div class="card-header">Nombre: <?=$product['nombre_producto']?></div>
        <div class="card-body">
            <p class="card-text">
                la zapatilla numero uno tiene una comodidad muy amplia, muchos de nuestros clientes se ven sadisfechos con ella, cuenta con una amplia aereodinamica y duracion
            </p>
        </div>
        <div class="card-footer"><button class="btn btn-primary" href="">Agregar al carrito de compras</button></div>
    </div>
    
    <?php }}
    ?>
</div>