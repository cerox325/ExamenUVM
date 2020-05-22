<?php

$host_name  = "localhost";
$database   = "examen";
$user_name  = "root";
$password   = "";

 $con = mysqli_connect($host_name, $user_name, $password, $database);
//name=&apaterno=&amaterno=&genero=Seleccione&edad=1&estadoCiviles=Seleccione&interesLevel=Seleccione&email=dasd&more=Lic
$name = $_GET['name'];
$apaterno = $_GET['apaterno'];
$amaterno = $_GET['amaterno'];
$genero = $_GET['genero'];
$edad= $_GET['edad'];
$estadoCivil = $_GET['estadoCiviles'];
$interesLevel= $_GET['interesLevel'];
$email = $_GET['email'];
$more = $_GET['more'];
$contraseña = $_GET['password'];
$contraseña = md5( $contraseña );



echo "<div>
<h1>
Gracias  por su registro
".$name."
</h1>

</div>";

 $queryregister="INSERT INTO `registers` (`ID`, `nombre`, `aPaterno`, `aMaterno`, `genero`, `edad`, `estadoCivil`, `email`, `password`) VALUES (NULL, '".$name."', '".$apaterno."', '".$amaterno."', '".$genero."', '".$edad."', '".$estadoCivil."', '".$email."', '".$contraseña."')";
 $resregister=mysqli_query($con,$queryregister);



?>
