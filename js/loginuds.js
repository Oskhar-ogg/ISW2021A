$(document).ready(function(event){
 
    
    $('#form_login').on('submit',function (event) {

        event.preventDefault();
        const usuario= $('#usuario').val();
        const contraseña= $('#contraseña').val();
        validarRut(usuario, contraseña);
    
        
    });






function validarRut(usuario, contraseña) {
    usuario=usuario.replace(/^0+|[.]+/gi,'');  //Limpia los puntos
    comparar = /^[0-9]+[-|‐]{1}[0-9kK]{1}$/;  //expresion regular rut
    comparar2 = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü0-9\-_.,\s]*$/ // expresion regular restriccion simbolos
    select= "select";from="from";where="where";set="set";update="update";alter="alter";


    if(usuario === ""){  //Valida rut vacio
        document.getElementById("error_login").innerHTML="<div class='alert alert-danger mt-3' role='alert'>Debe ingresar un rut</div>";
        return false;
    }
    else if(!comparar.test(usuario)){
        document.getElementById("error_login").innerHTML="<div class='alert alert-danger mt-3' role='alert'>Ingrese un formato de rut correcto</div>"; 
        return false;
    }
    else if(contraseña === ""){
        document.getElementById("error_login").innerHTML="<div class='alert alert-danger mt-3' role='alert'>Debe ingresar contraseña</div>";
        return false;  
    }
    else if((!comparar2.test(usuario) || (!comparar2.test(contraseña)))){
        document.getElementById("error_login").innerHTML="<div class='alert alert-danger mt-3' role='alert'>Simbologia no permitida!</div>";
        return false;
    }
    else if((contraseña.toLowerCase().indexOf(select) !== -1) || (contraseña.toLowerCase().indexOf(from) !== -1) || (contraseña.toLowerCase().indexOf(where) !== -1) || (contraseña.toLowerCase().indexOf(set) !== -1) || (contraseña.toLowerCase().indexOf(update) !== -1) || (contraseña.toLowerCase().indexOf(alter) !== -1)){
        document.getElementById("error_login").innerHTML="<div class='alert alert-danger mt-3' role='alert'>ERROR!</div>";
        return false;
    }
    else{
        login(usuario, contraseña);
    }   
}


function login(usuario, contraseña) {

    //ajax

    const dato={
        usuario:usuario,
        contraseña:contraseña
    }

    $.ajax({
        type:"POST",
        url:"login.php",
        data:dato,
    
    }).done((respuesta)=>{
        respuesta=JSON.parse(respuesta);
            if (respuesta.success) {               
                window.location='../inicio';
            }
            else {                    
                document.getElementById("error_login").innerHTML="<div class='alert alert-danger mt-3' role='alert'>"+respuesta.mensaje;"</div>";             
            }
    });

    
}


});






function cambiarRut(){
    document.getElementById('usuario').addEventListener('input', function(evt) {
     
    let value = this.value.replace(/\./g, '').replace('-', '');
    if (value.match(/[^0-9k]/ig)) {
        value = value.replace(value, '');
    }
    if (value.match(/^(\d{2})(\d{3}){2}(\w{1})$/)) {
        value = value.replace(/^(\d{2})(\d{3})(\d{3})(\w{1})$/, '$1.$2.$3-$4');
    }
    else if (value.match(/^(\d)(\d{3}){2}(\w{0,1})$/)) {
        value = value.replace(/^(\d)(\d{3})(\d{3})(\w{0,1})$/, '$1.$2.$3-$4');
    }
    else if (value.match(/^(\d)(\d{3})(\d{0,2})$/)) {
        value = value.replace(/^(\d)(\d{3})(\d{0,2})$/, '$1.$2.$3');
    }
    else if (value.match(/^(\d)(\d{0,2})$/)) {
        value = value.replace(/^(\d)(\d{0,2})$/, '$1.$2');
    }
    this.value = value;
    });

}




