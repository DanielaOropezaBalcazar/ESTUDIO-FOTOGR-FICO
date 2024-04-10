$(document).ready(function() {
    // Carga inicial de fotos
    cargarFotos();

    $('#formularioModFoto').submit(function(e) {
        e.preventDefault(); // Evita el envío tradicional del formulario
        
        var datosFormulario = {
            id: $('#selectFoto').val(),
            nombre: $('#nombreMod').val(),
            descripcion: $('#descripcionMod').val(),
            precio: $('#precioMod').val(),
            urlImagen: $('#urlImagenMod').val(),
            accion: 'actualizarFoto'
        };
        
        $.ajax({
            type: "POST",
            url: "procesosAjax/mod_foto.php",
            data: datosFormulario,
            success: function(response) {
                alert(response);
                cargarFotos(); // Recargar listado de fotos si es necesario
            }
        });
    });

    function cargarFotos() {
        $.ajax({
            url: 'procesosAjax/mod_foto.php',
            type: 'POST',
            data: { accion: 'cargarFotos' },
            success: function(response) {
                var fotos = JSON.parse(response);
                fotos.forEach(function(foto) {
                    $('#selectFoto').append(`<option value="${foto.id}">${foto.id} - ${foto.nombre}</option>`);
                });
            }
        });
    }
});
