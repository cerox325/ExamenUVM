@extends('auth.contenido')

@section('login')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<div class="row justify-content-center">
<form action="/save">

<div class="container" id="app" >
        <div>
            <h1 style="color: blue;">Registro de  <a v-text="name"></a>
            </h1>

        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                Nombre(s)
                <br>
                <input class="form-control" type="text" style=" width: 100%;" name="name" id="name"  v-model="name" />
              </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
               Apellido Paterno
               <br>
               <input type="text" class="form-control" style=" width: 100%;"  id="apaterno" name="apaterno"
               v-model="apaterno"  />
              </div>
              <div class="col">
                Apellido Materno
                <br>
                <input type="text" class="form-control" style=" width: 100%;" id="amaterno" name="amaterno" v-model="amaterno" />
              </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                Genero
                <br>
                <select id="genero" name="genero" class="form-control" style=" width: 100%;">¨
                <option>Seleccione</option>
                <?php
                        $host_name  = "localhost";
                        $database   = "examen";
                        $user_name  = "root";
                        $password   = "";

                         $con = mysqli_connect($host_name, $user_name, $password, $database);
                         $querygenero="SELECT * FROM genero";
                         $resgenero=mysqli_query($con,$querygenero);
                         $rowgenero=mysqli_fetch_assoc($resgenero);

                         $res=mysqli_query($con, $querygenero);
                            if ($rew=mysqli_fetch_row($res)) {
                                    foreach ($res as $producto) {
                                        echo '<option>'.utf8_decode($producto['tipo']).'</option>';
                                    }
                            }


                    ?>
                </select>
            </div>
            <div class="col">
                Edad
                <br>
                <input type="number" id="edad" name="edad" class="form-control" style=" width: 100%;" value="1" min="1"/>
            </div>
            <div class="col" id="estadocivil">
                Estado Civil
                <br>

                <select id="estadoCiviles" name="estadoCiviles" style=" width: 100%;" class="form-control">
                    <option >Seleccione</option>
                    <?php
                     $host_name  = "localhost";
                     $database   = "examen";
                     $user_name  = "root";
                     $password   = "";

                     $con = mysqli_connect($host_name, $user_name, $password, $database);

                     $queryestadocivels="SELECT * FROM estadocivil";
                     $resestadocivels=mysqli_query($con,$queryestadocivels);
                     $rowestadocivels=mysqli_fetch_assoc($resestadocivels);

                     $res=mysqli_query($con, $queryestadocivels);
                        if ($rew=mysqli_fetch_row($res)) {
                                foreach ($res as $producto) {
                                    echo '<option >'.utf8_decode($producto['estado']).'</option>';
                                }
                        }

                    ?>

                </select>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm">
               Nivel de interes
                <br>
                <select id="interesLevel" name="interesLevel" style=" width: 100%;" class="form-control" onclick="validar(value)">
                <option>Seleccione</option>
                <?php
                        $host_name  = "localhost";
                        $database   = "examen";
                        $user_name  = "root";
                        $password   = "";

                         $con = mysqli_connect($host_name, $user_name, $password, $database);
                         $queryinteres="SELECT * FROM nivelinteres";
                         $resinteres=mysqli_query($con,$queryinteres);
                         $rowinteres=mysqli_fetch_assoc($resinteres);

                         $res=mysqli_query($con, $queryinteres);
                            if ($rew=mysqli_fetch_row($res)) {
                                    foreach ($res as $producto) {
                                        echo '<option >'.utf8_decode($producto['GradoEstudio']).'</option>';
                                    }
                            }


                    ?>
                </select>
              </div>
        </div>
          <br>
          <div id="more" name="more">
          <select id="more" name="more">
             <option></option>
         </select>
          </div>
          <div class="row">
            <div class="col-sm">
                E-mail
                <br>
                <input id="email" name="email" type="email" style=" width: 100%;" value=""/>
              </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                Contraseña
                <br>
                <input type="password" id="password" name="password" class="form-control" style=" width: 100%;" value=""/>
              </div>
        </div>

        <br>
        <div class="row">
            <div class="col-sm">
                <input style=" width: 100%;"  type="submit" class="btn btn-primary" onclick="seguro()" value="Registrar"/>
              </div>
        </div>
        </form>


        <p>
        <h3 style="text-align: center;">O</h3>
        </p>
        <div class="row">
            <div class="col-sm">
                <input style=" width: 100%;"  type="button" class="btn btn-secondary" onclick="register()" value="Iniciar Seccion"/>
              </div>
        </div>
    </div>
    </div>
@endsection
