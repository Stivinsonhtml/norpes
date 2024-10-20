$(document).ready(function() {
    // Evento para abrir el modal al hacer clic en la imagen del producto
    $('.producto-imagen').on('click', function() {
        // Obtener el ID del modal basado en el atributo data-target
        const modalId = $(this).data('target');
        
        // Mostrar el modal
        $(modalId).modal('show');
    });

    // Evento para cerrar el modal al hacer clic en el botón "Cerrar"
    $('.modal-footer .btn-secondary').on('click', function() {
        // Cerrar el modal
        $(this).closest('.modal').modal('hide');
    });
});
