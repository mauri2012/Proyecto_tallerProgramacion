<section class="p-5" style="background-color:#f3a1a0">
<?php
    if(session()->getFlashdata('success')){
        echo "
        <div class='mt-3 mb-3 ms-3 me-3 h4 text-center alert alert-success alert-dismissible'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('success') . "
      </div>";
      } 
    

?>   
    <div class="p-5  container bg-light">
    <a type="input" class="btn btn-success" href="<?php echo base_url('/sign_up')?>">Alta usuarios</a> 
    <?php if($bandera){ ?>
    <a type="input" class="btn btn-danger" href="<?php echo base_url('/usuarios_baja?bandera='.false )?>">usuarios de baja</a>  
    <?php }else{?>
        <a type="input" class="btn btn-success" href="<?php echo base_url('/userview?bandera='.true )?>">todos los usuarios</a>  
    <?php } ?>

    <a type="input" class="btn btn-success" href="<?php echo base_url('formProvincia')?>">Alta Provincia</a>    
        <table class="table" id="venta">
            <thead class="table-active">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>perfil</th>
                    <th>Provincia</th>
                    <th>Baja</th>
                    <th>dar de baja</th>
                    <th>tipo</th>
                    <th>editar</th>
                </tr>    
            </thead>
            <tbody>
                
                <?php  foreach($users as $user){  ?>
                <tr>
                
                    <th><?= $user['nombre'] ?></th>
                    <th><?= $user['apellido'] ?></th>
                    <th><?= $user['email'] ?></th>
                    <th><?= $user['descripcion'] ?></th>
                    <th><?= $user['provincia'] ?></th>
                    <th><?= $user['baja'] ?></th>
                    <?php if($user['baja']!='NO'){?>
                        <th><a type="input" class="btn btn-danger" href="<?php echo base_url('bajaActualizarNO?id='.$user['id'])?>">X</a></th>
                    <?php }else{ ?>
                    <th><a type="input" class="btn btn-success" href="<?php echo base_url('bajaActualizarSI?id='.$user['id'])?>">*</a></th>
                    <?php } ?>
                    <th><a type="input" class="btn btn-secondary" href="<?php echo base_url('perfilActualizar?id='.$user['id']) . '&perfil_id='. $user['perfil_id'] ?>">perfil</a></th>
                    <th><a type="input" class="btn btn-secondary" href="<?php echo base_url('editarUsuario?id='.$user['id'])?>">cambiar</a></th>

                </tr>
                
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<script type="text/javascript" src="assets/DataTables/datatables.js"></script>

<script type="text/javascript" src="assets/DataTables/DataTables-1.13.4/js/prueba.min.js"></script>

<script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>

<script type="text/javascript" src="assets/js/tables.js"></script>