<?php 
    include('../partes/head.php');
    include('validacioninicio.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Etiquetas <meta> obligatorias para Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../js/login.js"></script>
    <link rel="stylesheet" href="../assets/css/logincss.css">

    <title>LOGIN UNIVERSIDAD DEL SUR</title>
    <link rel="shortcut icon" type="image/x-icon" href="screenshot-university-of-future.jpg">

    </head>
    <body>
        <hr/>
        <section class="form-contact">
            <a href="imag.png" class="image" title="imag.png"></a>
            <img alt="LOGO UDS" src="../assets/css/UNIVERSIDAD__1_.png" decoding="async" width="160" height="120" class="image" srcset="imag.png 2x, imag.png 3.5x" data-file-width="1600" data-file-height="1200"> </a>
            <hr/>    
    <div class="container-fluid" id="container">
        <div class="caja">
            <form method="POST" id="form_login">   
                    <h3 id=h3>Iniciar sesion</h3>
                    <div id="error_login"></div>
                    <div class="row col-md-12 p-2">
                        <label for="nombre">Rut:</label>
                    </div>
                    <div class="row col-md-12">
                        <input type="text" class="form-control" placeholder="Ingrese su rut sin punto ni guion" name="usuario" id="usuario" onkeypress="cambiarRut()" minlength="7" maxlength="12"  onpaste="return false" autocomplete="off" autofocus name="usuario" required >
                    </div>
                    <div class="row col-md-12 p-2">
                        <label for="contraseña">Contraseña:</label>
                    </div>
                    <div class="row col-md-12">
                        <input type="password" class="form-control" name="contraseña" id="contraseña" required>
                    </div>
            </form>
        </div>
    </div>          
            <input class="botons" name="boton" type="submit" value="INGRESAR A PLATAFORMA">
            </form>
        </section>
    </body>
        <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/popper/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</html>    