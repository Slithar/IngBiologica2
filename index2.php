<!DOCTYPE html>
<html>

<head>
	<title>Bienvenido Estudiante</title>
	<meta charset="utf-8">

	<script src="js/jquery-2.2.3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/main.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

<!--
	Modals for Login And Sign Up
-->
	<div class="modal fade" role="dialog" id="SignUpModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="centered-text">
						<h2>Crear Nuevo Usuario</h2>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<div class="centered-text">
						<b>Ingeniería Biológica - 2018</b>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" role="dialog" id="LogInModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="centered-text">
						<h2>Ingresar al Sistema</h2>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
				</div>
				<div class="modal-body">
					<div class="container-fluid centered-text">
						<div class="row">
							<div class="col-sm-12">
								<form id="formLogIn" method="POST">
									<div class="form-group">
										<label for="cedulaUsuario">Cédula de Identidad:</label>
										<input type="text" name="cedulaUsuario" id="cedulaUsuario" class="form-control">
									</div>
									<div class="form-group">
										<label for="passwordUsuario">Contraseña</label>
										<input type="password" name="passwordUsuario" id="passwordUsuario" class="form-control">
									</div>
									<div class="form-group centered-text">
										<input type="submit" name="submitLogInForm" value="Ingresar" class="btn btn-primary">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="centered-text">
						<b>Ingeniería Biológica - 2018</b>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<img src="images/logo-header.svg" class="header-logo navbar-brand">
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li><a data-toggle="modal" data-target="#SignUpModal" href="#"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
						<li><a data-toggle="modal" data-target="#LogInModal" href="#"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>
					</ul>
				</div>	

			</nav>
		</div>
	</div>
</body>
</html>