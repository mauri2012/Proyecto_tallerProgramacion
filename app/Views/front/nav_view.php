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
			<nav class="collapse navbar-collapse col-sm-5 col-md-5 col-lg-7 row mx-0 my-auto" id="navbarToggle">
			    <ul class="navbar-nav col-7 ">
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url('')?>">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url('producto');?>"><i class="bi bi-shop-window"></i></a></li>
				    <li class="nav-item"><a class="nav-link " href="<?php echo base_url('shopping');?>">					
						<i class="bi bi-basket2-fill"></i>
					</a></li>
			    </ul>
			
				<div class="col-5 ">
					<a class="btn btn-primary mx-1 my-1" href="<?php echo base_url('log_in')?>" role="button">Iniciar Sesion</a>
					<a class="btn btn-success mx-1" href="<?php echo base_url('sign_up')?>" role="button">Registrarse</a>
				</div>
			</nav>
			
        </nav>
	</section>
</header>
