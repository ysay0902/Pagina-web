<?php
 $conectar = mysqli_connect('127.0.0.1','root','123','registros');

 if(!$conectar){
     echo "No conectado";
}
 $nombre = $_POST['Nombre'];
 $email = $_POST['Email'];

 $sql = "INSERT INTO aprendices (`Nombre`, `Email`) VALUES ('$nombre', '$email');";

 $ejecutar = mysqli_query($conectar, $sql);
 
 if(!$ejecutar){
     echo "ERROR";
 }else{
     echo "GUARDADO";
 }


?>