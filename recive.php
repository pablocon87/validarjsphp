<?php
include "./permitidos.php";
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$domicilio=$_POST['domicilio'];
$numerocel=$_POST['numerocel'];
$email=$_POST['email'];
if(permited($nombre)==false || permited($apellido)==false || permited($domicilio)==false){
 echo "no permitido";
 return;
}
if(permitedNumber($dni)==false || permitedNumber($numerocel)==false){
  echo "no numero";
  return;  
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "no email";
    return;
}else{

    echo "
        <br>
        <p style='text-align:center;'>$nombre<p>
        <br>
        <p style='text-align:center;'>$apellido<p>
        <br>
        <p style='text-align:center;'>$dni<p>
        <br>
        <p style='text-align:center;'>$domicilio<p>
        <br>
        <p style='text-align:center;'>$numerocel<p>
        <br>
        <p style='text-align:center;'>$email<p>
        <br>
            ";
    }
?>