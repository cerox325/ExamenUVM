function seguro(){
    var nombre = $("#name").val();
    var apaterno = $("#apaterno").val();
    var amaterno = $("#amaterno").val();
    var edad = $("#edad").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var genero = $("#genero").val();
    var estadoCivil = $("#estadoCivil").val();
    var interes = $("interesLevel").val();

    if(nombre !== "" && apaterno  !== "" && amaterno !== "" && edad >= 0 && email !== "" && password !== "" &&genero !== "Seleccione" && estadoCivil !== "Seleccione" && interes !== "Seleccione"){
     alert("registro exitoso")
    } else {
        alert("te falta llenar datos")
    }


}

function register(){
    location.href = "register"
}



function validar(id){
    if(id == "Seleccione"){
        $.ajax({
            data: {},
            type:'GET',
            url: "/empty",
        })
        .done(function( data, textStatus, jqXHR ) {
            $("#more").html(data);
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
        console.log("error")
        });
    } else if (id == "Preparatoria"){
        $.ajax({
            data: {},
            type:'GET',
            url: "/empty",
        })
        .done(function( data, textStatus, jqXHR ) {
            $("#more").html(data);
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
        console.log("error")
        });
    }else if(id == "Licenciatura"){
        $.ajax({
            data: {"id":id},
            type:'GET',
            url: "/estudiosmore",
        })
        .done(function( data, textStatus, jqXHR ) {
            $("#more").html(data);
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
        console.log("error")
        });
    } else if (id == "Posgrado"){
        $.ajax({
            data: {"id":id},
            type:'GET',
            url: "/estudiosmore2",
        })
        .done(function( data, textStatus, jqXHR ) {
            $("#more").html(data);
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
        console.log("error")
        });
    }
}
