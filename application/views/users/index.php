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
		<div class="container mt-4 ">
			<h3>Lista de usuarios</h3>
			<div class="row justify-content-md-center">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nombres</th>
								<th scope="col">Apellidos</th>
								<th scope="col">edad</th>
								<th scope="col"> Ciudad</th>
								<th scope="col"> Acciones</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($users as $user): ?>
							<tr>
								<th scope="row"><?php echo $user['id']; ?></th>
								<td><?php echo $user['nombres']; ?></td>
								<td><?php echo $user['apellidos']; ?></td>
								<td><?php echo $user['edad']; ?></td>
								<td><?php echo $user['municipio']; ?></td>
								<td>
									<div class="dropdown">
									<a class="btn btn-primary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Acciones
									</a>
  								<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="<?php echo site_url('users/'.$user['id']); ?>">Ver</a>
										<a class="dropdown-item" href="<?php echo site_url('users/update/'.$user['id']); ?>"> Actualizar</a>
										<a class="dropdown-item" href="<?php echo site_url('users/confirm_delete/'.$user['num_documento']); ?>"> Eliminar</a>
									</div>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row justify-content-end">
				<a href="<?php echo site_url('users/create')?>"  class="btn btn-primary"> Agregar Usuario</a>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.js"></script>
	</body>
</html>


