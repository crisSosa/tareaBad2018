<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/normalize.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/main.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/jquery.steps.css') }}" media="all" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('js/jquery.cookie-1.3.1.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('js/jquery.steps.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/jquery.validate.js') }}"></script>  
 

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
 	 <a class="navbar-brand" href="#">Inicio</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
 	 </button>
  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    	<div class="navbar-nav">
    		<!--Agregando opciones de menu-->
      		<li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="">Importador</a>
			    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
			      <a class="dropdown-item" href="#">Agregar Importador</a>
			      <a class="dropdown-item" href="#">Consultar Importador</a>
			      <a class="dropdown-item" href="#">Modificar Importador</a>
			      <a class="dropdown-item" href="#">Dar de Baja Importador</a>
			    </div>
  			</li>
    	</div>
 	 </div>
	</nav>

	<div class="container" style="padding: 10px">
		<div class="row">
			<div class="col-lg-12 text-center">
				 @yield('content')
			</div>
		</div>
	</div>
</body>
</html>