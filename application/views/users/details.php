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
          <li class="breadcrumb-item active" aria-current="page">Detalles</li>
        </ol>
    </nav><br>
		<div class="container mt-4 ">
      <h3>Información general del cliente</h3>
      <div class="row justify-content-md-center">
        <div class="card">
          <div class="card-header">
              Información Básica
          </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h5 class="card-title">Nombres y apellidos</h5>  
                  <p class="card-text"><?php echo $user_model['nombres'].' '.$user_model['apellidos']?>.</p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h5 class="card-title">tipo de documento e identificación</h5>
                  <p>El señor(a) <b><?php echo $user_model['nombres'].' '.$user_model['apellidos']?></b>, se encuentra identificado
                  con documento tipo <b><?php echo $user_model['tipo_documento']?></b>, que cuenta con el siguiente numero de Identificación
                  <b><?php echo $user_model['num_documento']?></b>
                  </p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <h5 class="card-title">Género</h5>
                  <p><?php echo $user_model['genero']?></p>
                </div>
                <div class="col-md-4 col-sm-12">
                  <h5 class="card-title">Edad</h5>
                  <p><?php echo $user_model['edad'].' Años'?></p>
                </div>
                <div class="col-md-4 col-sm-12">
                  <h5 class="card-title">Email</h5>
                  <p><?php echo $user_model['email']?></p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <h5 class="card-title">Departamento</h5>
                  <p><?php echo $user_model['departamento']?></p>
                </div>
              <div class="col-md-4 col-sm-12">
                <h5 class="card-title">Municipio</h5>
                <p><?php echo $user_model['municipio']?></p>
              </div>
              <div class="col-md-4 col-sm-12">
                <h5 class="card-title">Dirección</h5>
                <p><?php echo $user_model['direccion']?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-2 justify-content-end">
        <a href="<?php echo site_url('users')?>"  class="btn btn-success">Regresar al Home</a>
      </div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.js"></script>
	</body>
</html>

