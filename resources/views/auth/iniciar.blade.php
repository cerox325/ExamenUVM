
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
$host_name  = "localhost";
$database   = "examen";
$user_name  = "root";
$password   = "";

$con = mysqli_connect($host_name, $user_name, $password, $database);

$user = $_GET['email'];
$pwd = $_GET['password'];
$pwd =  md5($pwd);



$queryusarioLogueado="SELECT * FROM registers WHERE email = '".$user."' AND password = '".$pwd."' ";
$resusarioLogueado=mysqli_query($con,$queryusarioLogueado);
$rowusarioLogueado=mysqli_fetch_assoc($resusarioLogueado);

$res=mysqli_query($con, $queryusarioLogueado);

if (mysqli_num_rows($res) == 1) {
    if ($rew=mysqli_fetch_row($res)) {
        foreach ($res as $usuarioLogueado) {
            echo '<h1>Bienvenido '.utf8_decode($usuarioLogueado['nombre']).'</h1>';
            echo '<input type="button" value="Salir" onClick="history.go(-1);">';
        }
}
}



?>
</body>
</html>
