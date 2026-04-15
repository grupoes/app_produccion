<?= $this->extend('layouts/main') ?>

<?= $this->section('style') ?>
<style>
    .day-card {
        transition: transform 0.2s;
        border: 1px solid #eff0f2;
    }
    .day-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
    }
    .users-list {
        min-height: 150px;
    }
    .user-item {
        padding: 8px 12px;
        background-color: #f8f9fa;
        border-radius: 6px;
        margin-bottom: 8px;
        border: 1px solid #eff0f2;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .user-item:hover {
        background-color: #f1f1f9;
    }
    .btn-add-day {
        border: 1px dashed #ced4da;
        background: transparent;
        color: #74788d;
        font-weight: 500;
    }
    .btn-add-day:hover {
        background: #f1f1f9;
        border-color: #5156be;
        color: #5156be;
    }
    .day-name {
        font-weight: 600;
        font-size: 15px;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Configuración de Turnos</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tareas</a></li>
                    <li class="breadcrumb-item active">Turnos de Ventas</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-xl-12">
        <div class="card bg-primary-subtle border-0">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h5 class="text-primary font-size-18">Asignación Semanal de Usuarios</h5>
                        <p class="mb-0 text-primary opacity-75">Selecciona qué usuarios estarán disponibles para cada día de la semana (Lunes a Sábado).</p>
                    </div>
                    <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                        <button class="btn btn-primary waves-effect waves-light" onclick="guardarCambios()">
                            <i class="bx bx-save me-1"></i> Guardar Programación
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <?php 
    $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    foreach($dias as $idx => $dia): 
    ?>
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card h-100 day-card">
            <div class="card-header bg-transparent border-bottom d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0 day-name text-primary"><?= $dia ?></h5>
                <span class="badge bg-soft-info text-info rounded-pill" id="count-<?= $idx ?>">0 Usuarios</span>
            </div>
            <div class="card-body">
                <div class="users-list" id="day-list-<?= $idx ?>">
                    <!-- Placeholder si no hay usuarios -->
                    <div class="text-center py-4 text-muted empty-msg">
                        <i class="bx bx-user-plus display-6 opacity-25"></i>
                        <p class="mt-2 mb-0 font-size-13">Sin usuarios asignados</p>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-transparent border-top p-3">
                <button class="btn btn-light w-100 btn-add-day font-size-13" onclick="abrirModalAsignar(<?= $idx ?>)">
                    <i class="bx bx-plus-circle me-1"></i> Asignar Usuario
                </button>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<!-- Modal de Selección de Usuarios (Inspirado en ui-modals.html de Minia) -->
<div class="modal fade" id="modalAsignar" tabindex="-1" aria-labelledby="modalAsignarLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg border-0">
            <div class="modal-header bg-primary py-3">
                <h5 class="modal-title text-white" id="modalAsignarLabel">Asignar para el <span id="modal-dia-txt"></span></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="mb-4">
                    <label class="form-label font-size-13">Buscar Miembro del Equipo</label>
                    <div class="search-box">
                        <div class="position-relative">
                            <input type="text" class="form-control rounded" placeholder="Escribe un nombre..." id="busquedaUser">
                            <i class="bx bx-search-alt search-icon text-muted" style="position: absolute; right: 10px; top: 10px;"></i>
                        </div>
                    </div>
                </div>

                <div class="user-selection-container" style="max-height: 350px; overflow-y: auto;">
                    <!-- Lista de Usuarios (Mock) -->
                    <?php 
                    $mockUsers = [
                        ['id' => 1, 'name' => 'Juan Pérez', 'role' => 'Ventas Senior', 'initials' => 'JP', 'bg' => 'bg-primary'],
                        ['id' => 2, 'name' => 'María García', 'role' => 'Soporte Ventas', 'initials' => 'MG', 'bg' => 'bg-success'],
                        ['id' => 3, 'name' => 'Carlos López', 'role' => 'Ejecutivo', 'initials' => 'CL', 'bg' => 'bg-info'],
                        ['id' => 4, 'name' => 'Ana Martínez', 'role' => 'Coordinadora', 'initials' => 'AM', 'bg' => 'bg-warning'],
                        ['id' => 5, 'name' => 'Luis Rivas', 'role' => 'Asistente', 'initials' => 'LR', 'bg' => 'bg-danger'],
                    ];
                    foreach($mockUsers as $u):
                    ?>
                    <div class="d-flex align-items-center mb-3 p-2 rounded user-row" style="cursor: pointer;" onclick="toggleCheck(<?= $u['id'] ?>)">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm">
                                <span class="avatar-title rounded-circle <?= $u['bg'] ?> text-white">
                                    <?= $u['initials'] ?>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-0 font-size-14 user-name-val"><?= $u['name'] ?></h6>
                            <p class="text-muted mb-0 font-size-12 user-role-val"><?= $u['role'] ?></p>
                        </div>
                        <div class="flex-shrink-0">
                            <input class="form-check-input font-size-16" type="checkbox" id="check-user-<?= $u['id'] ?>" 
                                   data-name="<?= $u['name'] ?>" 
                                   data-role="<?= $u['role'] ?>"
                                   data-initials="<?= $u['initials'] ?>"
                                   data-bg="<?= $u['bg'] ?>">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-link text-decoration-none" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary px-4" onclick="confirmarAsignacion()">Confirmar</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    let diaActual = null;
    const turnosData = {}; // { 0: [ids], 1: [ids], ... }
    const diasNombres = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];

    function abrirModalAsignar(idx) {
        diaActual = idx;
        document.getElementById('modal-dia-txt').innerText = diasNombres[idx];
        
        // Reset checkboxes
        document.querySelectorAll('.form-check-input').forEach(chk => {
            const userId = chk.id.split('-').pop();
            chk.checked = (turnosData[idx] && turnosData[idx].includes(userId));
        });

        const myModal = new bootstrap.Modal(document.getElementById('modalAsignar'));
        myModal.show();
    }

    function toggleCheck(id) {
        const chk = document.getElementById('check-user-' + id);
        chk.checked = !chk.checked;
    }

    function confirmarAsignacion() {
        if (diaActual === null) return;

        const listContainer = document.getElementById('day-list-' + diaActual);
        listContainer.innerHTML = '';
        turnosData[diaActual] = [];

        const checkedOnes = document.querySelectorAll('.form-check-input:checked');
        
        if (checkedOnes.length > 0) {
            checkedOnes.forEach(chk => {
                const userId = chk.id.split('-').pop();
                const name = chk.dataset.name;
                const role = chk.dataset.role;
                const initials = chk.dataset.initials;
                const bg = chk.dataset.bg;

                turnosData[diaActual].push(userId);
                renderUserInDay(diaActual, userId, name, role, initials, bg);
            });
        } else {
            listContainer.innerHTML = `
                <div class="text-center py-4 text-muted empty-msg">
                    <i class="bx bx-user-plus display-6 opacity-25"></i>
                    <p class="mt-2 mb-0 font-size-13">Sin usuarios asignados</p>
                </div>
            `;
        }

        document.getElementById('count-' + diaActual).innerText = checkedOnes.length + ' Usuarios';
        
        const modalEl = document.getElementById('modalAsignar');
        const modalObj = bootstrap.Modal.getInstance(modalEl);
        modalObj.hide();
    }

    function renderUserInDay(diaIdx, userId, name, role, initials, bg) {
        const container = document.getElementById('day-list-' + diaIdx);
        const html = `
            <div class="user-item animated fadeIn" id="user-item-${diaIdx}-${userId}">
                <div class="d-flex align-items-center">
                    <div class="avatar-xs me-2">
                        <span class="avatar-title rounded-circle ${bg} font-size-10 text-white">
                            ${initials}
                        </span>
                    </div>
                    <div>
                        <h6 class="mb-0 font-size-13">${name}</h6>
                        <p class="text-muted mb-0" style="font-size: 11px;">${role}</p>
                    </div>
                </div>
                <a href="javascript:void(0);" class="text-danger font-size-16" onclick="quitarUser(${diaIdx}, ${userId})">
                    <i class="bx bx-x-circle"></i>
                </a>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
    }

    function quitarUser(diaIdx, userId) {
        const idx = turnosData[diaIdx].indexOf(userId.toString());
        if (idx > -1) {
            turnosData[diaIdx].splice(idx, 1);
            document.getElementById(`user-item-${diaIdx}-${userId}`).remove();
            
            const count = turnosData[diaIdx].length;
            document.getElementById('count-' + diaIdx).innerText = count + ' Usuarios';
            
            if (count === 0) {
                document.getElementById('day-list-' + diaIdx).innerHTML = `
                    <div class="text-center py-4 text-muted empty-msg">
                        <i class="bx bx-user-plus display-6 opacity-25"></i>
                        <p class="mt-2 mb-0 font-size-13">Sin usuarios asignados</p>
                    </div>
                `;
            }
        }
    }

    function guardarCambios() {
        Swal.fire({
            title: '¡Programación Guardada!',
            text: 'Se han configurado los turnos con éxito.',
            icon: 'success',
            confirmButtonColor: '#5156be',
        });
        console.log("Datos de Programación:", turnosData);
    }

    // Buscador en modal
    document.getElementById('busquedaUser').addEventListener('keyup', function() {
        const val = this.value.toLowerCase();
        document.querySelectorAll('.user-row').forEach(row => {
            const name = row.querySelector('.user-name-val').innerText.toLowerCase();
            row.style.display = name.includes(val) ? 'flex' : 'none';
        });
    });
</script>
<?= $this->endSection() ?>