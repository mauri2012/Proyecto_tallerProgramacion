<header>



    <section class="container-fluid px-0  sticky-md-top py-3 bg-dark">

		<nav class="row navbar px-0 mx-0 navbar-expand-md navbar-dark ">
        	<div class=" col-sm-5 col-lg-5 ps-2 container pe-0 mx-0">
				<a class="navbar-brand" href="<?php echo base_url('')?>">
					<img class="navbar-brand mx-auto" src="assets/img/icon/apple-icon-60x60.png">
					<span class="container ps-3 navbar-header text-primary ">
						Zapatillas Lezana
					</span>
				</a>

				<button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
    			</button>
		    </div>
			<?php if(session()->get('logged_in')){?>
			<!-- si es un usuario logeado-->
			<nav class="collapse navbar-collapse col-sm-5 col-md-5 col-lg-7 row mx-0 my-auto" id="navbarToggle">
			    <ul class="navbar-nav col-6 col-md-7 ">
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url('')?>">Home</a></li>
					<?php if(session()->get('perfil_id')==2){ ?>	
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url('producto');?>"><i class="bi bi-shop-window"></i></a></li>
					<li class="nav-item"><a class="nav-link " href="<?php echo base_url('carro');?>">					
						<i class="bi bi-basket2-fill"></i>
					</a></li>

					<?php } ?>
					<li class="nav-item">
						<a class="nav-link " href="<?php echo base_url('shopping');?>">					
						compras totales</a>
					</li>
					<?php if(session()->get('perfil_id')==1){ ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('/userview')?>">user_view</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('/productoview?')?>">producto_view</a>
						</li>
					<?php } ?>
			    </ul>
				<div class="col-6 col-md-5 ">
					<a type="submit" class="btn btn-danger" href="<?php echo base_url('/log_out')?>">log out</a>
					<a type="input" class="btn btn-secondary" href="<?php echo base_url('/editarUsuario?id='.session()->get('id'))?>">editar</a>
				</div>
			</nav>
			<?php } else {?>	
				<!-- si no esta logeado-->
				<div class="col-6 col-md-5 ">
					<a class="btn btn-primary mx-1 my-1" href="<?php echo base_url('log_in')?>" role="button">Iniciar Sesion</a>
					<a class="btn btn-success mx-1" href="<?php echo base_url('sign_up')?>" role="button">Registrarse</a>
				</div>
			<?php }?>
			
        </nav>
		
	</section>
</header>
