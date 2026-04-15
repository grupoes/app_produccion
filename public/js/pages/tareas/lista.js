$(document).ready(function () {
    initDataTable("#datatable");

    // Validar que los minutos no excedan 59 ni sean negativos
    $(document).on('input', '#input-minutos', function() {
        let val = parseInt($(this).val());
        if (val > 59) {
            $(this).val(59);
        } else if (val < 0) {
            $(this).val(0);
        }
    });

    // Agregar nuevo rol dinámicamente
    $('#btnAddRol').click(function() {
        const nuevoRol = `
            <div class="row rol-item mb-2 border-bottom pb-2">
                <div class="col-md-7">
                    <select class="form-select" name="rol[]">
                        <option value="">Seleccione Rol...</option>
                        <option value="1">Auxiliar de Redacción</option>
                        <option value="2">Diseñador Gráfico</option>
                        <option value="3">Metodólogo</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-select" name="tipo_rol[]">
                        <option value="Primaria">Primaria</option>
                        <option value="Complementaria">Complementaria</option>
                    </select>
                </div>
                <div class="col-md-1 text-end align-self-center">
                    <button type="button" class="btn btn-soft-danger btn-sm btnRemoveRol">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>
            </div>`;
        $('#roles-wrapper').append(nuevoRol);
    });


    // Eliminar rol
    $(document).on('click', '.btnRemoveRol', function() {
        $(this).closest('.rol-item').remove();
    });
});
