<?php
$select= "select";$from="from";$where="where";$alter="alter";$update="update";$script="<script>";

if(isset($_POST['usuario']) && isset($_POST['contraseña']) && !empty($_POST['usuario']) && !empty($_POST['contraseña'])){
    if((strncasecmp($_POST['contraseña'], $select, 6) === 0) || (strncasecmp($_POST['usuario'], $select, 6) === 0) || (strncasecmp($_POST['contraseña'], $from, 4) === 0) || (strncasecmp($_POST['usuario'], $from, 4) === 0) || (strncasecmp($_POST['contraseña'], $where, 4) === 0) || (strncasecmp($_POST['usuario'], $where, 4) === 0) || (strncasecmp($_POST['contraseña'], $alter, 5) === 0) || (strncasecmp($_POST['usuario'], $alter, 5) === 0) || (strncasecmp($_POST['contraseña'], $update, 6) === 0) || (strncasecmp($_POST['usuario'], $update, 6) === 0) || (strncasecmp($_POST['contraseña'], $script, 8) === 0) || (strncasecmp($_POST['usuario'], $script, 8) === 0)){    
        $respuesta['success'] = false;
        $respuesta['mensaje'] = 'ERROR!';
        $respuesta=json_encode($respuesta);
        echo $respuesta;
        return;
    }

    $usuario= $_POST['usuario'];
    $contraseña= $_POST['contraseña'];

    function validar_rut($usuario){
        $comparar= '/([0-9]{1}[0-9]{3}[0-9]{3}-[0-9kK]{1})/';
        $comparar2= '/([0-9]{2}[0-9]{3}[0-9]{3}-[0-9kK]{1})/';
        if(preg_match_all($comparar,$usuario) || preg_match_all($comparar2,$usuario)){
            return true;
        }
        else{
            return false;
        }
    }


    function apiGet($user, $password){
        $rut="?rut=";
        $pass="&password=";
        $data = array();
        $cl = curl_init('http://146.83.194.142:1042/api/users/'.$rut.$user.$pass.$password);
        curl_setopt($cl,CURLOPT_RETURNTRANSFER,false);
        curl_setopt($cl, CURLOPT_RETURNTRANSFER, true);
        $response=curl_exec($cl);
        
        $info=curl_getinfo($cl);
        
        $status=$info["http_code"];   //Inutil
        $error=curl_errno($cl);        //Inutil
        
        curl_close($cl);
        $json=json_decode($response,false);


    if(isset($json->{'error'})){      //Si existe error 
            $respuesta['success'] = false;
            $respuesta['mensaje'] = 'Usuario o contraseña incorrecto';
            $respuesta=json_encode($respuesta);
            return $respuesta;
        } 
    else{
            session_start();
            $_SESSION['sesionUsuario']=array(
                'nombre'=>$json->{'nombre'},
                'apellidos'=>$json->{'apellidos'},
                'cargo'=>$json->{'cargo'},
                'sede'=>$json->{'sede'}
            );
            $respuesta['success'] = true;
            $respuesta=json_encode($respuesta);
            return $respuesta;
    }
    }

    $val_rut=validar_rut($usuario);


    if($val_rut == true){
        $respuesta=apiGet($usuario,$contraseña);
        echo $respuesta;
    } else{
        $respuesta['success'] = false;
        $respuesta['mensaje'] = 'Formato de rut incorrecto';
        $respuesta=json_encode($respuesta);
        echo $respuesta;
        }   
}

else{
    $respuesta['success'] = false;
    $respuesta['mensaje'] = 'Error';
    $respuesta=json_encode($respuesta);
    echo $respuesta;
}

?>