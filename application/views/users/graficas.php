<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Prueba Nuvola</title>
		<!-- Bootstrap CSS-->
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
        <nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo site_url('users')?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Graficas</li>
			</ol>
		</nav><br>
		<div class="container mt-4 ">
			<div class="row justify-content-md-center">
                <h1>graficas</h1>
                
            </div>
            
            <div id="piechart_div" style="border: 1px solid #ccc"></div>
		</div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/graficas.js"></script>
	</body>
</html>


