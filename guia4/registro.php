<?php include('servidor.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registrar usuario TXT</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: orange;">
	<div class="row mt-5">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="header" style="text-align: center;">
				<h2>Registro</h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="registro.php">
				<?php include('errores.php'); ?>
				<div class="form-group">
					<label>Nombres</label>
					<input class="form-control" type="text" name="fullname" value="<?php echo $fullname; ?>">
				</div>
				<div class="form-group">
					<label>Usuario</label>
					<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
				</div>
				<div class="form-group">
					<label>Correo</label>
					<input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input class="form-control" type="password" name="password_1">
				</div>
				<div class="form-group">
					<label>Confirme contraseña</label>
					<input class="form-control" type="password" name="password_2"><br>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="reg_user">Completar registro</button>
				</div>
				<p>
					¿Ya tienes una cuenta? <a href="login.php">Ingresar</a>
				</p>
			</form>
		</div>
	</div>
</body>

</html>