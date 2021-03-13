<?php
//conexion
$servidor= 'localhost';
$usuario='root';
$contraseña='';
$database='blog_master';
$db= mysqli_connect($servidor, $usuario, $contraseña, $database);

mysqli_query($db, "SET NAMES 'utf8'");

//INICIAR LA SESION
session_start();




