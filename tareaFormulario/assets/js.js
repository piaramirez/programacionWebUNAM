$(document).ready(function(){
    $("#btnRegistro").click(function(){
        $("#registro").show();
        $(".login").hide();
    });

    $("#btnLogin").click(function(){
        $(".login").show();
        $("#registro").hide();
    });

    $("#btnSubmit").click(function(event){
        event.preventDefault(); 
        if ($("#registro").is(":visible")) {
            var matriculaAleatoria = generarMatricula();
            $('#matricula').val(matriculaAleatoria);
            console.log("Datos del formulario de registro");
        } else {
            console.log("Datos del formulario de inicio de sesión");
        }


        setTimeout(function() {
            location.reload();
        }, 5000);
    });

    function generarMatricula() {
        var matricula = '';
        var longitudMaxima = 8;
        var caracteresPermitidos = '0123456789';
    
        for (var i = 0; i < longitudMaxima; i++) {
            var indice = Math.floor(Math.random() * caracteresPermitidos.length);
            matricula += caracteresPermitidos.charAt(indice);
        }
    
        return matricula;
    }
});
