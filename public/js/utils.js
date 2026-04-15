/**
 * Global utilities for the application
 */

const DataTableSpanish = {
    "sProcessing": "Procesando...",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "Ningún dato disponible en esta tabla",
    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix": "",
    "sSearch": "Buscar:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
    }
};

/**
 * Initializes a DataTable with default Spanish configuration and merged options
 * @param {string} selector - CSS selector for the table
 * @param {object} options - Custom DataTable options
 * @returns {object} - DataTable instance
 */
function initDataTable(selector, options = {}) {
    const defaults = {
        language: DataTableSpanish,
        responsive: true,
        // Add other global defaults here if needed
    };

    const finalOptions = $.extend(true, {}, defaults, options);
    return $(selector).DataTable(finalOptions);
}
