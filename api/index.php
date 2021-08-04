<?php
$user='19699076-3';
$password='123456';
// HTTP CODES
// https://developer.mozilla.org/es/docs/Web/HTTP/Status
// GET- un usuario
// `https://api-isw.herokuapp.com/api/login/usuario/${usuario}`
//POST-un  usuarios con password
// `https://api-isw.herokuapp.com/api/login/usuario/pass/${usuario}`

function apiPost($password,$user){
    //variable con data a enviar por post
    $data =array('password'=>$password );

    // inicializamos curl
    $cl = curl_init('https://api-isw.herokuapp.com/api/login/usuario/pass/'.$user);

    curl_setopt($cl,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($cl,CURLOPT_CUSTOMREQUEST,"POST");
    curl_setopt($cl, CURLOPT_POSTFIELDS,http_build_query($data));

    $response =curl_exec($cl);
    $info=curl_getinfo($cl);
    $status=$info["http_code"];
    $error=curl_errno($cl);
    
    curl_close($cl);
    // if ($status!=200) {
    //     return "Error";
    // }
    // if (!$error) {
    //     return "Error";
    // }
    // var_dump($response);

    $json=json_decode($response,false);

    // // var_dump($json);
    //     print $json->respuesta->usuario;
    //     print $json->respuesta->rut;
    //     print $json->respuesta->rol;
    if ($status!=200) {
        return $json->message;
    }
    if ($error) {
        return $json->message;
    }
    $array=array();
    $array['nombre']=$json->respuesta->usuario;
    $array['rut']=$json->respuesta->rut;
    $array['rol']=$json->respuesta->rol;
    $respuesta=json_encode($array);
    return $respuesta;




}




function apiGet($user){
    $data = array();
    $cl = curl_init('https://api-isw.herokuapp.com/api/login/usuario/'.$user);
    curl_setopt($cl,CURLOPT_RETURNTRANSFER,false);
    curl_setopt($cl, CURLOPT_RETURNTRANSFER, true);
    $response=curl_exec($cl);
    
    $info=curl_getinfo($cl);
    
    $status=$info["http_code"];
    $error=curl_errno($cl);
    
    curl_close($cl);
    $json=json_decode($response,false);
    
   
    if ($error) {
        return $array['error']='Error con consulta';
    }
    if ($status!=200) {
        return $array['error']=$json->message;
    }
    $array['nombre']=$json->respuesta->usuario;
    $array['rut']=$json->respuesta->rut;
    $array['rol']=$json->respuesta->rol;
    $respuesta=json_encode($array);
    return $respuesta;

}

$respuestaPost= apiPost($password,$user);
echo $respuestaPost;
$respuestaGet=apiGet($user);
echo $respuestaGet;





?>


<?php include 'validacioninicio.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Etiquetas <meta> obligatorias para Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <form>
            <input class="controls" onkeypress="cambiarRut()" type="text" name="nombres" id="rut" placeholder="Ingrese rut" requeried><br>
            <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingrese contraseña" requeried><br/>            
            <input class="botons" name="boton" type="submit" value="INGRESAR A PLATAFORMA">
            </form>
        </section>
        <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/popper/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/loginuds.js"></script>
    <script src="index.js"></script>
</body>
</html>