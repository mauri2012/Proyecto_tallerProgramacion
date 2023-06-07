<section class="p-5 " style="background-color:#f3a1a0">

    <div class="p-5 m-5 container bg-light">
        <div class="p-5">
        <?php
            $session=session();
            $cart=\Config\Services::cart();
            $cart=$cart->contents();
            if(empty($cart)){
                echo 'No se ingresaron productos aun ,vuelva a productos para seleccionar productos que desea comprar';
            }
            if($cart==TRUE){?>    
                <table class="table">
                    <thead>
                        <tr class="table-active">
                            <td>ID</td>
                            <td>Nombre</td>
                            
                            <td>cantidad</td>
                            <td>precio</td>
                            <td>precio Total</td>                    
                            <td>Cencelar Producto</td>
                        </tr>    
                    </thead>
                    <tbody>
                        <?php 
                            
                        $acumuladorTotal=0;
                        foreach($cart as $producto){?>
                            <tr>
                            <?php
                                echo form_open('carrito_agrega');
                                echo form_hidden('id',$producto['id']);
                                echo form_hidden('precio',$producto['price']);
                                echo form_hidden('nombre',$producto['name']);
                                echo form_hidden('stock',$producto['stock']);
                                $btn=array(
                                    'class'=>' btn btn-success',
                                    'value' => '+',
                                    'name' => 'action'
                                );
 
                                ?>
                                <td><?=$producto['id']?></td>
                                <td><?=$producto['name']?></td>

                                <td><?=number_format($producto['qty'],1)?></td>
                                <td>$<?=number_format($producto['price'],2)?></td>
                                <?php $gran_total=$producto['qty']*$producto['price']?>
                                <td>$<?= number_format($gran_total,2)?></td>
                                <?php $acumuladorTotal=$gran_total+$acumuladorTotal?>
                                <td>
                                    
                                    <a type="button" class="btn btn-danger"  href="<?php echo base_url('/eliminar-carrito?rowid='.$producto['rowid'])?>" >X</a>

                                </td>
                                <td><?php
                                        echo form_submit($btn);
                                        echo form_close();  
                                    ?></td>
                                    <td>
                                        <a type="button" class="btn btn-danger" href="<?php echo base_url('/unoMenosCart?rowid='.$producto['rowid']. '&cantidad='.$producto['qty'])?>">-</a>
                                    </td>                        
                                <?php
                                $bandera=true;
                                $ipP=0;
                                if($producto['stock']<$producto['qty']){
                                    $bandera=false;
                                    $ipP=$producto['id'];
                                }
                                
                                ?>

                            </tr>

                        <?php
                            /*<a class="btn btn-primary col-5" href="<?php echo base_url('carrito?usuario='. session()->get('id') . '&precio='. $producto['precio'] . '&producto=' .$producto['id'] )?>">Agregar al carrito</a>*/
 
                             } 
                         ?>
                            <tr class="table-light">
                              
                                <td colspan="5"></td>
                                <td colspan="5"><b>Total: $ <?=number_format($acumuladorTotal,2)?></b></td>
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                            
                              <td colspan="5" align="center">
                                
                                <input type="button" class="btn btn-danger btn-md" value="Borrar carrito" onClick="window.location='borrar'">
                                <?php if($bandera){?>
                                <input type="button" class="btn btn-primary btn-md" value="Comprar" onClick="window.location='carrito'">
                                   <?php } else{?>
                                    <h4>no stock disponible en producto  <?=$ipP?></h4>
                                    <?php }?>
                                </td>
                            </tr>
                    </tbody>
                         
                </table>
        <?php }?>
        </div>
    </div>
</section>