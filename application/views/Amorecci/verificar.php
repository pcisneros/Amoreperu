<!DOCTYPE html>
<html lan="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<title>Verificar codigo de compra</title>
	<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('bootstrap/css/navbar.css'); ?>" rel="stylesheet">
	<script src="<?php echo base_url('bootstrap/js/ie-emulation-modes-warning.js')?>"></script>
	<link href="<?php echo base_url('bootstrap/css/estilos.css'); ?>" rel="stylesheet">
</head>
<body>

	<?php echo form_open("http://localhost/amorecci/index.php/c_verificar/verify_code") ?>
	<div class="container">
		<div class="jumbotron">
			<div class="row">
				<h2>Ingrese su codigo:</h2>
				<div class="col-md-8">
					<input type="text" id="cod_prod" name="cod_prod" placeholder="Ingrese su codigo" required maxlength="8"/>
				</div>
				<div class="col-md-4">
					<button type="submit" id="btnbuscar" name="btnbuscar" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Buscar</button>
				</div>
			</div>
		</div>

		<?php
		if (isset($codigos) !=FALSE) {
			foreach ($codigos->result() as $row){
        // '<div class="alert alert-success text-center"><b>¡Muchas Gracias! </b> por registrarse en Amorecci, le hemos enviado un correo de verificación.</div>'
				echo '<div class="alert alert-success text-center"><b>Estimado(a):</b> Cliente el codigo de su producto es <b>"'.$row->cod_prod.'"</b> y la descripcion es <b>"'.$row->desc_prod.'"</b> por lo tanto queremos decirle que se sienta seguro porque su producto es original.</div><br>';
				// echo "descripcion de su producto es <b>".$row->desc_prod."</b> de exelente calidad";
			}
		}
    echo $this->session->flashdata('ev'); 
	?>
	</div>

	<?php echo form_close()?>
<div class="navbar">
          <footer class="footer">

            <nav class="navbar navbar-default navbar-fixed-bottom">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button id="botonR" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">
                    <!-- <span style="color:#000;"><img src="img/amorecilogo.png" width="27px"> AMORECCI</span> -->
                    <img src="<?php echo base_url('resources/img/logo.jpg') ?>" width="90px">
                  </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul id="ulnav" class="nav navbar-nav">
                    <li id="lihome"><a href="<?php echo base_url()?>">Inicio</a></li>
                    <li id="liabout"><a href="#">Productos</a></li>
                    <li id="liabout" class="active"><a href="#">Verificar</a></li>
                    <li id="licontact"><a href="#">Contacto</a></li>
                    <li class="dropdown">
                      <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Mas<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">opcion 1</a></li>
                        <li><a href="#">opcion 2</a></li>
                        <li><a href="#">opcion 3</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">cabecera</li>
                        <li><a href="#">opcion 1</a></li>
                        <li><a href="#">opcion 2</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="./">ES | ENG<span class="sr-only">(actual)</span></a></li>
                    <li><a href="#">Logout</a></li>
                    <li><a href="<?php echo base_url("index.php/c_registrar")?>">Registrarse</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div><!--/.container-fluid -->
            </nav>

            <p>&copy; Amorecci 2015.</p>
          </footer>
      </div>

      <script src="<?php echo base_url('bootstrap/js/jquery-2.1.3.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/script.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('bootstrap/js/ie10-viewport-bug-workaround.js')?>"></script>

</body>
</html>