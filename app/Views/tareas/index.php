<?= $this->extend('layouts/main') ?>

<?= $this->section('style') ?>
<link href="<?= base_url('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Lista de Tareas</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tareas</a></li>
                    <li class="breadcrumb-item active">Lista de Tareas</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Lista de Tareas</h4>
                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalTarea">
                    <i class="bx bx-plus me-1"></i> Nueva Tarea
                </button>
            </div>
            <div class="card-body">


                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tarea</th>
                            <th>Categoria</th>
                            <th>Tiempo</th>
                            <th>Responsables</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>


                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- Modal Nueva Tarea -->
<div id="modalTarea" class="modal fade" tabindex="-1" aria-labelledby="modalTareaLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTareaLabel">Registrar Nueva Tarea</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTarea">
                    <div class="mb-3">
                        <label for="nombre_tarea" class="form-label">Nombre de la Tarea</label>
                        <input type="text" class="form-control" id="nombre_tarea" name="nombre_tarea" placeholder="Ej: Redacción de tesis" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="categoria_tarea" class="form-label">Categoría</label>
                                <select class="form-select" id="categoria_tarea" name="categoria_tarea" required>
                                    <option value="">Seleccione...</option>
                                    <option value="Pregrado">Pregrado</option>
                                    <option value="Postgrado">Postgrado</option>
                                    <option value="Otros">Otros</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Tiempo Estimado (Opcional)</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="horas" placeholder="Hrs" min="0">
                                    <span class="input-group-text">:</span>
                                    <input type="number" class="form-control" id="input-minutos" name="minutos" placeholder="Min" min="0" max="59">
                                </div>

                                <small class="text-muted">Horas : Minutos</small>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label mb-0">Roles Sugeridos</label>
                            <button type="button" class="btn btn-soft-primary btn-sm" id="btnAddRol">
                                <i class="bx bx-plus me-1"></i> Agregar Rol
                            </button>
                        </div>
                        <div id="roles-wrapper">
                            <div class="row rol-item mb-2 border-bottom pb-2">
                                <div class="col-md-7">
                                    <select class="form-select" name="rol[]">
                                        <option value="">Seleccione Rol...</option>
                                        <option value="1">Auxiliar de Redacción</option>
                                        <option value="2">Diseñador Gráfico</option>
                                        <option value="3">Metodólogo</option>
                                        <option value="4">Revisor de Estilo</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-select" name="tipo_rol[]">
                                        <option value="Primaria">Primaria</option>
                                        <option value="Complementaria">Complementaria</option>
                                    </select>
                                </div>
                                <div class="col-md-1 text-end align-self-center">
                                    <!-- Espacio para el botón de eliminar -->
                                </div>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Guardar Tarea</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= base_url('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>

<script src="<?= base_url('js/pages/tareas/lista.js') ?>"></script>
<?= $this->endSection() ?>