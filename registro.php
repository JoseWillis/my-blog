<?php
session_start();
if(isset($_POST)){
    
    // Recoger los valores del formulario de registro
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
    $email= isset($_POST['email']) ? $_POST['email'] : false;
    $pass= isset($_POST['pass']) ? $_POST['pass'] : false;
    
    // Array de errores
    $errores= array();
    
    //Validar los datos antes de guarlarlos en la base de datos
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match('/[0-9]/', $nombre)){
        $nombre_validado= true;
    }else{
        $nombre_validado= false;
        $errores['nombre']= "El nombre no es valido";
    }
    
    if(!empty($apellido) && !is_numeric($apellido) && !preg_match('/[0-9]/', $apellido)){
        $apellido_validado= true;
    }else{
        $apellido_validado= false;
        $errores['apellido']= "El apellido no es valido";
    }
    
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado= true;
    }else{
        $email_validado= false;
        $errores['email']= "El email no es valido";
    }
    
    if(!empty($pass)){
        $pass_validado= true;
    }else{
        $pass_validado= false;
        $errores['pass']= "La contraseña no es valida";
    }
    
    $guardar_usuario= false;
    
    if(count($errores) == 0){
        $guardar_usuario=true;
    
        
    }else{
        $_SESSION['errores']= $errores;
        header('Location: index.php');
        
    }
}