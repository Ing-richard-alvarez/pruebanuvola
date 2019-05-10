<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Prueba Nuvola</title>
		<!-- Bootstrap CSS-->
		<link href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo site_url('users')?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Eliminar registro</li>
			</ol>
		</nav><br>
		<div class="container mt-4 ">
			<div class="row justify-content-md-center">
				<div class="card">
					<h5 class="card-header">Eliminar registro  - <?php echo $users['nombres']." ".$users['apellidos']; ?></h5>
					<div class="card-body">
						<h5 class="card-title">Confirmación para eliminar al cliente</h5>
						<p class="card-text">El(a) cliente a eliminar de nuestra base de datos es el sr(a) 
						 <b><?php echo $users['nombres']." ".$users['apellidos']; ?></b> que cuenta con 
						 <b><?php echo $users['tipo_documento']; ?></b> identificado con el siguiente número
						 <b><?php echo $users['num_documento']; ?></b>.</p>
						<a href="<?php echo site_url('users/delete/'.$users['num_documento']); ?>" class="btn btn-primary">Eliminar cliente</a>
					</div>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.js"></script>
	</body>
</html>


