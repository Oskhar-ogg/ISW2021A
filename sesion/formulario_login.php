
<?php 
    include('../partes/head.php');
    include('validar_login.php');
?>

<link rel="stylesheet" href="../assets/css/normalize.css">
<link rel="stylesheet" href="../assets/css/login.css">
<script type="text/javascript" src="../js/login.js"></script>

<body>
    
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
                    <div class="row col-md-12 p-4">
                        <button type="submit" class="btn btn-success btn-block">Iniciar</button>
                    </div>  
            </form>
        </div>
    </div>          
</body>
</html>