@extends('layouts.app')

@section('content')
<div class="container" id="app" >
    <form action="/iniciar">
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
                <input style=" width: 100%;"  type="submit" class="btn btn-primary"  value="Iniciar"/>
              </div>
        </div>
        </form>
    </div>
@endsection
