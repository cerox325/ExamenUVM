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
                <input style=" width: 100%;"  type="button" class="btn btn-primary" onclick="seguro()" value="niciar"/>
              </div>
        </div>

    </div>
</body>
</html>
