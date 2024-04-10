$(document).ready(function() {
    // Carga inicial de las fotos
    cargarFotosParaEliminar();

    // Manejar el envío del formulario de eliminación
    $('#formularioEliminarFoto').submit(function(e) {
        e.preventDefault(); // Prevenir la recarga de la página

        var fotoId = $('#selectFotoEliminar').val();
        if(fotoId) {
            if(confirm("¿Estás seguro de querer eliminar esta foto?")) {
                $.ajax({
                    type: "POST",
                    url: "procesosAjax/elim_fotos.php",
                    data: { id: fotoId, accion: 'eliminar' },
                    success: function(response) {
                        alert("Foto eliminada con éxito.");
                        cargarFotosParaEliminar(); // Recargar el list box después de eliminar
                    }
                });
            }
        }
    });

    function cargarFotosParaEliminar() {
        $('#selectFotoEliminar').empty(); // Limpiar el list box antes de cargar

        $.ajax({
            type: "POST",
            url: "procesosAjax/elim_fotos.php",
            data: { accion: 'cargarFotos' },
            success: function(response) {
                var fotos = JSON.parse(response);
                fotos.forEach(function(foto) {
                    $('#selectFotoEliminar').append(`<option value="${foto.id}">${foto.id} - ${foto.nombre}</option>`);
                });
            }
        });
    }
});
