// procesosAjax/registrofoto.js
$(document).ready(function () {
    $('#formularioFoto').submit(function (e) {
        e.preventDefault(); // Prevenir el envío estándar del formulario

        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: "procesosAjax/registrofoto.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                alert(response); // Mostrar la respuesta del servidor
                $('#formularioFoto').trigger("reset"); // Opcional: resetear el formulario tras el envío
            },
            error: function () {
                alert("Error en el envío de datos.");
            }
        });
    });
});
