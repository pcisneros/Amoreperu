<!DOCTYPE html>
<?php
// $registrado =  $this->session->flashdata('Registrado');
// $erroreg = $this->session->flashdata('Erroreg');
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Registro</title>
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/css/navbar.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('bootstrap/js/ie-emulation-modes-warning.js')?>"></script>
    <link href="<?php echo base_url('bootstrap/css/estilos.css'); ?>" rel="stylesheet">

  </head>

  <body>

    <div class="container-full">     
      <!-- Main component for a primary marketing message or call to action -->
        <div id="content2">
          <div id="cambio">

            <div class="col-md-5">
            	<div class="container">
                    <img class="img-responsive res"src="<?php echo base_url('resources/img/amorecilogo.png')?>" alt="Amorecci">
                    <h1 style="font-size:50px; text-align:center;">AMORECCI</h1>
                </div>  
          </div>

            <div class="col-md-7">
              <div class="row">

                <div class="col-md-3" style="font-family:Candara; color:#000; letter-spacing: 3px;">
                  <div class="box box--high">
                    <h4>Filosofia</h4>
                    <div id="child">
                    Somos soñadores inspiradores de sueños.
                    Unimos a las parejas y las hacemos felices.
                    Por eso mantenemos una filosofia de querer hacer lo mejor para las parejas.
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <!-- <div style="padding-left:140px;"> -->
                  <div class="container">  
                  <?php 
                    // echo $this->session->flashdata('Registrado');
                    // echo $this->session->flashdata('Erroreg');
                    // echo $registrado;
                    // echo $erroreg;
                  if($this->session->flashdata('Registrado'))
                    {
                        echo $this->session->flashdata('Registrado');
                    }

                  if($this->session->flashdata('Erroreg'))
                    {
                        echo $this->session->flashdata('Erroreg');
                    }
                    echo $this->session->flashdata('Sucess');
                    echo $this->session->flashdata('Error');
                  ?>                  
          					<div class="jumbotron">
          						<h2>Registro de Usuario</h2><br>
          						<div class="row text-center">
          							<div class="col-md-12">
          								<!-- <form method="POST" id="frmreg" action="http://localhost/amorecci/index.php/c_registrar/save"> -->
                          <?php echo form_open("http://localhost/amorecci/index.php/c_registrar/save") ?>
          									<input type="text" id="nombre" name="nombre" placeholder="Nombres" required/><br>
          									<input type="text" id="apellido" name="apellido" placeholder="Apellidos" required/><br>
          									<input type="email" id="email" name="email" placeholder="E-mail" required/><br>
          									<input type="text" id="user" name="user" placeholder="Usuario" required/><br>
          									<input type="password" id ="password" name="password" placeholder="Password" required/><br>
          									<input type="password" id="repassword" name="repassword" placeholder="Confirmar Password" required/><br><br>
          									<button type="submit" id="btnregistrar" name="Registrar" class="btn btn-default">Registrar</button>
          									<button type="reset" id="btncancel" name="Cancelar" class="btn btn-default">Cancelar</button>
          								<!-- </form> -->
                          <?php echo form_close() ?>
          							</div>
          						</div>
          					</div>
				          </div><br>
                </div>

              </div>              

            </div>

            </div>
            <!-- <div class="col-md-7">
              <div class="row">
                <div class="col-md-6">
                  <div>
                      <div class="row">
                        <div class="col-md-12">
                        </div>         
                      </div>            
                  </div>
                  
                </div>

              </div>              

            </div> -->

            </div>
          </div>
        </div> <!-- /container -->


      <!-- Site footer nmenu -->     

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
                    <img src="<?php echo base_url('resources/img/logo.jpg')?>" width="90px">
                  </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul id="ulnav" class="nav navbar-nav">
                    <li id="lihome"><a href="<?php echo base_url()?>">Inicio</a></li>
                    <li id="liabout"><a href="#">Productos</a></li>
                    <li id="liabout"><a href="<?php echo base_url("index.php/c_verificar")?>">Verificar</a></li>
                    <li id="licontact"><a href="#">Contacto</a></li>
                    <li class="dropdown">
                      <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mas <span class="caret"></span></a>
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
                    <li><a href="<?php echo base_url()?>">Login</a></li>
                    <li class="active"><a href="#">Registrarse</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div><!--/.container-fluid -->
            </nav>

            <p>&copy; Amorecci 2015.</p>
          </footer>
      </div>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('bootstrap/js/jquery-2.1.3.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/script.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('bootstrap/js/ie10-viewport-bug-workaround.js')?>"></script>
    
  </body>
</html>
