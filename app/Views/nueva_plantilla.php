
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="shortcut icon" href="assets/img/icon/favicon.ico">
    <title>Zapateria Lezana</title>
</head>
<body>
	<header>
		<nav class="bg-dark">
			<div class="d-flex flex-row-reverse">
				<button class="btn btn-success mx-2">sign up</button>
				<button class="btn btn-primary">log in</button>
			</div>
		</nav>
	</header>
    <section class="container-fluid px-0  sticky-md-top ">
        <nav class="row navbar px-0 mx-0 navbar-expand-sm bg-dark navbar-dark ">
        <div class="col-xs-12 col-sm-2 col-lg-1 ps-2 container pe-0 mx-0">
				<img class="navbar-brand mx-auto" src="assets/img/icon/apple-icon-60x60.png">
			</div>
			<div class="container col-sm-2 col-lg-8 ps-0 navbar-header text-primary ">
				<p class="mx-auto mx-md-0">ZAPATILLAS LEZANA</p>
			</div>
		    <div class="col-sm-8 col-lg-3 container-fluid">
			    <ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Products</a></li>
				    <li class="nav-item"><a class="nav-link " href="#">Brands</a></li>
			    </ul>
			</div>
        </nav>
    </section>
    <section class="container-fluid px-0 h-50">
        <!-- Carousel -->
        <div id="demo" class="carousel slide h-100 " data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/img_carousel/primerImg.jpg" alt="zapatilla1" class="d-block w-75 mx-auto">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/img_carousel/segundaImg.jpg" alt="zapatilla2" class="d-block w-75 mx-auto">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/img_carousel/terceraImg.jpg" alt="zapatilla3" class="d-block w-75 mx-auto">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev bg-dark" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next bg-dark" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>
    <div>
        <p class="h2">Zapateria Lezana</p>
    </div>
    <section class="container m-3">
        <p class="text-center fw-bold text-uppercase fsc-italic">El mejor lugar para comprar zapatos</p>
        <p>tenemos muchas variedades de zapatos al mejor precio del mercado para todo tipo de zapato, podes hacer tus pedidos online y recibirlos en las puerta de tu casas o venir a nuestros locales </p>
        <p>Estamos en Buenos Aires,Corrientes,Cacho Y Misiones. Somos una empresa en crecimiento y nos gustaria expandirnos al resto de Argentina </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, iure eaque incidunt iste accusamus error quos nemo ad tenetur qui ex ratione laboriosam. Sunt accusantium corporis laboriosam tempore deleniti alias.</p>
    </section>
	<footer>
    	<nav class="row navbar px-0 mx-0 navbar-expand-sm bg-dark navbar-dark ">
			<div class="col-sm-8 col-lg-6 container-fluid">
			    <ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="#">quienes somos</a></li>
					<li class="nav-item"><a class="nav-link" href="#">informacion de contacto</a></li>
				    <li class="nav-item"><a class="nav-link " href="#">terminos y usos</a></li>
			    </ul>
			</div>
        </nav>
	</footer>
</body>
</html>