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
            <h4 class="mb-sm-0 font-size-18">Lista de Potenciales Clientes</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Clientes</a></li>
                    <li class="breadcrumb-item active">Potenciales Clientes</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Lista</h4>
            </div>
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>Contacto</th>
                            <th>Fecha Registro</th>
                            <th>Nivel</th>
                            <th>Carrera</th>
                            <th>Estado</th>
                            <th>Fecha Entrega</th>
                            <th>Vendedor</th>
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
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= base_url('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>

<script src="<?= base_url('js/pages/potencialesClientes/lista.js') ?>"></script>
<?= $this->endSection() ?>