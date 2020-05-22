<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/principal.js"></script>
    <script src="js/functions.js"></script>
    <title>UVM</title>
</head>
<body>

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
                    <option>Masculino</option>
                    <option>Femenino</option>
                </select>
            </div>
            <div class="col">
                Edad
                <br>
                <input type="number" id="edad" name="edad" class="form-control" style=" width: 100%;" value="1" min="1"/>
            </div>
            <div class="col">
                Estado Civil
                <br>
                <select id="estadoCivil" name="estadoCivil" style=" width: 100%;" class="form-control">
                    <option>Seleccione</option>
                    <option>Soltero</option>
                </select>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm">
               Nivel de interes
                <br>
                <select id="interesLevel" name="interesLevel" style=" width: 100%;" class="form-control">
                    <option>Seleccione</option>
                    <option>Preparatoria</option>
                </select>
              </div>
        </div>
          <br>
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
                <input type="password" class="form-control" style=" width: 100%;" value=""/>
              </div>
        </div>

        <br>
        <div class="row">
            <div class="col-sm">
                <input style=" width: 100%;"  type="button" class="btn btn-primary" onclick="seguro()" value="Registrar"/>
              </div>
        </div>

    </div>
</body>
</html>
