<?php include_once('servidor.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registrar en TXT</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: orange;">
	<div class="row mt-5">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="header" style="text-align: center;">
				<h2>Ingresar</h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="login.php">
				<?php include('errores.php'); ?>
				<div class="form-group">
					<label>Usuario</label>
					<input class="form-control" type="text" name="username">
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input class="form-control" type="password" name="password"><br>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="login_user">Ingresar</button>
				</div>
				<p>
					¿Aún no tienes una cuenta? <a href="registro.php">Registrate</a>
				</p>
			</form>
		</div>
	</div>
</body>

</html>