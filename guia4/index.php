<?php
session_start();
if (!isset($_SESSION['fullname'])) {
	$_SESSION['msg'] = "Primero debes iniciar sesion";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['fullname']);
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>PHP Usuarios desde TXT</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: orange;">
	<div class="row mt-5">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="header">
				<h2>Inicio</h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="content">
				<?php if (isset($_SESSION['success'])) : ?>
					<div class="error success">
						<h3>
							<?php
							echo $_SESSION['success'];
							unset($_SESSION['success']);
							?>
						</h3>
					</div>
				<?php endif ?>
				<?php if (isset($_SESSION['fullname'])) : ?>
					<p>Su ingreso a sido exitoso <strong><?php echo $_SESSION['fullname']; ?></strong></p>
					<p> <a href="index.php?logout='1'" style="color: red;">Salir</a> </p>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>

</html>