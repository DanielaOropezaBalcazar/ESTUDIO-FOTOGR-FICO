// procesosAjax/verificarSesion.js
$(document).ready(function(){
    $("body").click(function(){
        $.ajax({
            url: 'procesosAjax/verificar_sesion.php',
            type: 'POST',
            success: function(response) {
                if(response.trim() === "not_logged_in") {
                    // Redirigir al usuario a la página de inicio de sesión sin guardar la URL actual en el historial de la sesión
                    window.location.replace('login.php');
                } else {
                    // El usuario está logueado, puedes poner aquí cualquier otra lógica que necesites
                    console.log("Usuario logueado.");
                }
            }
        });
    });
});


