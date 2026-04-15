<?= $this->extend('layouts/main') ?>

<?= $this->section('style') ?>
<link href="<?= base_url('admin/assets/libs/choices.js/public/assets/styles/choices.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('admin/assets/libs/dropzone/min/dropzone.min.css') ?>" rel="stylesheet" type="text/css" />
<style>
    /* Asegurar que las miniaturas de Dropzone se vean bien */
    .dropzone .dz-preview .dz-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    /* Estilo para que el editor tenga un alto mínimo */
    .ck-editor__editable {
        min-height: 200px;
        background-color: white !important;
    }
</style>

<?= $this->endSection() ?>


<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Registrar Potencial Cliente</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Clientes</a></li>
                    <li class="breadcrumb-item active">Registrar</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <form id="formRegistrarPotencial">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Información del Trabajo Académico</h4>
                    <p class="card-title-desc">Complete los detalles principales del proyecto solicitado.</p>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="titulo_trabajo" class="form-label">Título del Trabajo / Proyecto</label>
                                <input class="form-control" type="text" placeholder="Ej: Tesis de Ingeniería Civil..." id="titulo_trabajo" name="titulo_trabajo">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Nivel Académico</label>
                                <select class="form-select" name="nivel_academico">
                                    <option selected disabled>Seleccionar nivel</option>
                                    <option value="Pregrado">Pregrado</option>
                                    <option value="Maestría">Maestría</option>
                                    <option value="Doctorado">Doctorado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="universidad" class="form-label">Universidad</label>
                                <select class="form-control" name="universidad" id="universidad">
                                    <option value="">Seleccione una universidad</option>
                                    <option value="UNMSM">Universidad Nacional Mayor de San Marcos</option>
                                    <option value="UNI">Universidad Nacional de Ingeniería</option>



                                </select>


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="carrera" class="form-label">Carrera</label>
                                <select class="form-control" name="carrera" id="carrera">
                                    <option value="">Seleccione una carrera</option>
                                    <option value="Ingeniería Civil">Ingeniería Civil</option>
                                    <option value="Administración">Administración</option>

                                    <option value="Derecho">Derecho</option>
                                    <option value="Medicina">Medicina</option>
                                    <option value="Psicología">Psicología</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title">Contactos</h4>
                        <p class="card-title-desc">Puede registrar uno o más contactos para este cliente.</p>
                    </div>
                    <button type="button" class="btn btn-soft-success btn-sm" id="btnAddContacto">
                        <i class="mdi mdi-plus me-1"></i> Agregar Contacto
                    </button>
                </div>
                <div class="card-body p-4">
                    <div id="container-contactos">
                        <!-- Primer contacto por defecto -->
                        <div class="row contacto-item border-bottom mb-3 pb-3">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Nombres</label>
                                    <input class="form-control" type="text" name="contacto_nombre[]" placeholder="Nombres">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Apellidos</label>
                                    <input class="form-control" type="text" name="contacto_apellido[]" placeholder="Apellidos">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Celular</label>
                                    <input class="form-control" type="tel" name="contacto_celular[]" placeholder="987654321">
                                </div>
                            </div>
                            <div class="col-md-1 d-flex align-items-center">
                                <!-- No eliminar el primero -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Asignación y Entrega</h4>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="fecha_entrega" class="form-label">Fecha de Entrega Tentativa</label>
                                <input class="form-control" type="date" id="fecha_entrega" name="fecha_entrega">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Tarea</label>
                                <select class="form-select" name="tarea_id">
                                    <option selected disabled>Seleccionar tarea</option>
                                    <option value="1">Elaboración de Tesis</option>
                                    <option value="2">Asesoría Temática</option>
                                    <option value="3">Análisis Estadístico</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Auxiliar Responsable</label>
                                <select class="form-select" name="auxiliar_id">
                                    <option selected disabled>Seleccionar auxiliar</option>
                                    <option value="1">Juan Pérez</option>
                                    <option value="2">María García</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Origen del Contacto</label>
                                <select class="form-select" name="origen_contacto">
                                    <option selected disabled>Seleccionar origen</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="WhatsApp">WhatsApp</option>
                                    <option value="Recomendación">Recomendación</option>
                                    <option value="Web">Web</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="link_drive" class="form-label">Link de Google Drive</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bx bxl-google-cloud"></i></span>
                                    <input type="url" class="form-control" id="link_drive" name="link_drive" placeholder="https://drive.google.com/...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="anotaciones" class="form-label">Anotaciones / Observaciones</label>
                                <div id="editor-anotaciones"></div>
                                <textarea name="anotaciones" id="anotaciones" style="display:none;"></textarea>
                            </div>
                        </div>
                    </div>




                    <div class="mt-4 text-end">
                        <button type="reset" class="btn btn-light w-md me-2">Limpiar</button>
                        <button type="submit" class="btn btn-primary w-md">Registrar Potencial Cliente</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= base_url('admin/assets/libs/choices.js/public/assets/scripts/choices.min.js') ?>"></script>
<script src="<?= base_url('admin/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') ?>"></script>
<!-- Adaptador Base64 para que las imágenes funcionen sin backend -->
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        // Inicializar CKEditor con soporte de imágenes Base64
        ClassicEditor
            .create(document.querySelector('#editor-anotaciones'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|', 'imageUpload', 'insertTable', 'undo', 'redo'],
            })
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    document.querySelector('#anotaciones').value = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });


        // Inicializar Choices.js para Universidad y Carrera

        const choicesArray = ['#universidad', '#carrera'];
        choicesArray.forEach(selector => {
            const element = document.querySelector(selector);
            if (element) {
                new Choices(element, {
                    removeItemButton: true,
                    noResultsText: 'No se encontraron resultados',
                    noChoicesText: 'No hay opciones disponibles',
                    itemSelectText: 'Seleccionar',
                    searchEnabled: true,
                    searchChoices: true,
                    placeholder: true,
                    placeholderValue: 'Seleccione una opción',
                    searchPlaceholderValue: 'Escribe para buscar...',
                    shouldSort: false,
                });
            }
        });



        // Lógica para agregar más contactos dinámicamente

        $('#btnAddContacto').click(function() {
            const nuevoContacto = `
                <div class="row contacto-item border-bottom mb-3 pb-3">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Nombres</label>
                            <input class="form-control" type="text" name="contacto_nombre[]" placeholder="Nombres">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Apellidos</label>
                            <input class="form-control" type="text" name="contacto_apellido[]" placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Celular</label>
                            <input class="form-control" type="tel" name="contacto_celular[]" placeholder="987654321">
                        </div>
                    </div>
                    <div class="col-md-1 d-flex align-items-center">
                        <button type="button" class="btn btn-soft-danger btn-sm btnRemoveContacto mt-2">
                            <i class="mdi mdi-trash-can"></i>
                        </button>
                    </div>
                </div>
            `;
            $('#container-contactos').append(nuevoContacto);
        });

        // Eliminar fila de contacto
        $(document).on('click', '.btnRemoveContacto', function() {
            $(this).closest('.contacto-item').remove();
        });
    });
</script>
<?= $this->endSection() ?>