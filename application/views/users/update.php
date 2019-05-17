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
				<li class="breadcrumb-item active" aria-current="page">Actualización de datos</li>
			</ol>
		</nav><br>
		<div class="container mt-4 ">
			<?php echo validation_errors(); ?>
			<?php echo form_open('users/update/'.$users['id']); ?>
			<h4> <?php echo $title; ?></h4> <br>
			<form class="col-md-12">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="txtnombres">Nombres</label>
						<input type="text" class="form-control" id="txtnombres" name="txtnombres" placeholder="Ingrese sus nombres completo" value="<?php echo $users['nombres']?>">
					</div>
					<div class="form-group col-md-6">
						<label for="txtapellidos">Apellidos</label>
						<input type="text" class="form-control" id="txtapellidos" name="txtapellidos" placeholder="Ingrese sus apellidos completo" value="<?php echo $users['apellidos']?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="cmb_tipodocumento">Tipo de documento</label>
						<select class="custom-select" name="cmb_tipodocumento" required>
							<?php if($users['tipo_documento'] == 'Cédula de ciudadanía'): ?>
								<option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
								<option value="Cédula extranjera">Cédula extranjera</option>
								<option value="Pasaporte">Pasaporte</option>
							<?php elseif($users['tipo_documento'] == 'Cédula extranjera'):?>
								<option value="Cédula extranjera">Cédula extranjera</option>
								<option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
								<option value="Pasaporte">Pasaporte</option>
							<?php elseif($users['tipo_documento'] == 'Pasaporte'):?>
								<option value="Pasaporte">Pasaporte</option>
								<option value="Cédula extranjera">Cédula extranjera</option>
								<option value="Cédula de ciudadanía">Cédula de ciudadanía</option>	
							<?php endif?>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="txtnumerodocumento">Número de documento</label>
						<input type="text" class="form-control" id="txtnumerodocumento" name="txtnumerodocumento" placeholder="Ingrese su número de documento" value="<?php echo $users['num_documento']?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="cmb_genero">Género</label>
						<select class="custom-select" name="cmb_genero" required>
							<?php if($users['genero'] == 'Masculino'):?>
								<option value="Masculino">Masculino</option>
								<option value="Femenino">Femenino</option>
							<?php else: ?>
								<option value="Femenino">Femenino</option>
								<option value="Masculino">Masculino</option>
							<?php endif ?>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="txtedad">Edad</label>
						<input type="number" class="form-control" min="1" max="100" id="txtedad" name="txtedad" placeholder="Ingrese su edad" value="<?php echo $users['edad']?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="txtdepartamento">Departamento</label>
						<input type="text" class="form-control" id="txtdepartamento" name="txtdepartamento" placeholder="Ingrese su deparamento de origen" value="<?php echo $users['departamento']?>">
					</div>
					<div class="form-group col-md-6">
						<label for="txtmunicipio">Municipio</label>
						<input type="text" class="form-control" id="txtmunicipio" name="txtmunicipio" placeholder="Ingrese su municipio de origen" value="<?php echo $users['municipio']?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="txtdireccion">Dirección de residencia</label>
						<input type="text" class="form-control" id="txtdireccion" name="txtdireccion" placeholder="Ingrese su dirección de residencia" value="<?php echo $users['direccion']?>">
					</div>
					<div class="form-group col-md-6">
						<label for="txtemail">Correo electrónico</label>
						<input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="Ingrese su correo electrónico" value="<?php echo $users['email']?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<input type="submit" class="btn btn-primary float-right" value="Actualizar datos">
					</div>
				</div>
			</form>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.js"></script>
	</body>
</html>

