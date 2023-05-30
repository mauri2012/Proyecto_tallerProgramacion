<section class="p-5" style="background-color:#f3a1a0">

    <div class="p-5  container bg-light">
    <a type="input" class="btn btn-success" href="<?php echo base_url('/sign_up')?>">alta usuarios</a> 
    <?php if($bandera){ ?>
    <a type="input" class="btn btn-danger" href="<?php echo base_url('/usuarios_baja?bandera='.false )?>">usuarios de baja</a>  
    <?php }else{?>
        <a type="input" class="btn btn-success" href="<?php echo base_url('/userview?bandera='.true )?>">todos los usuarios</a>  
    <?php } ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>perfil</th>
                    <th>Baja</th>
                </tr>    
            </thead>
            <tbody>
                <?php foreach($users as $user){ ?>
                <tr>
                
                    <th><?= $user['nombre'] ?></th>
                    <th><?= $user['apellido'] ?></th>
                    <th><?= $user['email'] ?></th>
                    <th><?= $user['perfil_id'] ?></th>
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