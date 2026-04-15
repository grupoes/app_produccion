<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="<?= base_url('home') ?>">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Home</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-apps">Potenciales Clientes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="<?= base_url('registrar-potencial-cliente') ?>">
                                <span data-key="t-calendar">Registro de Potencial Cliente</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?= base_url('potenciales_clientes') ?>">
                                <span data-key="t-chat">Lista de Potenciales Clientes</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-chat.html">
                                <span data-key="t-chat">Documentos y Evidencias</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-chat.html">
                                <span data-key="t-chat">Anataciones</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">Tareas</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('tareas') ?>" data-key="t-login">Lista de Tareas</a></li>
                        <li><a href="auth-register.html" data-key="t-register">Calendario de Turnos</a></li>
                        <li><a href="auth-recoverpw.html" data-key="t-recover-password">Control de Carga</a></li>
                        <li><a href="auth-lock-screen.html" data-key="t-lock-screen">Auxiliar Antiguo</a></li>
                        <li><a href="auth-logout.html" data-key="t-logout">Historial de Tareas</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="message-circle"></i>
                        <span data-key="t-reuniones">Reuniones</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html" data-key="t-starter-page">Agendamiento de Reuniones</a></li>
                        <li><a href="pages-maintenance.html" data-key="t-maintenance">Disponibilidad de Auxiliares</a></li>
                        <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Notificaciones</a></li>
                        <li><a href="pages-timeline.html" data-key="t-timeline">Historial de Reuniones</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="settings"></i>
                        <span data-key="t-reuniones">Mantenimiento</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html" data-key="t-starter-page">Universidad</a></li>
                        <li><a href="pages-maintenance.html" data-key="t-maintenance">Carrera</a></li>
                        <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Feriados</a></li>
                        <li><a href="pages-timeline.html" data-key="t-timeline">Origen de Contacto</a></li>
                        <li><a href="pages-timeline.html" data-key="t-timeline">Nivel Académico</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="lock"></i>
                        <span data-key="t-reuniones">Seguridad</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html" data-key="t-starter-page">Usuarios</a></li>
                        <li><a href="pages-maintenance.html" data-key="t-maintenance">Roles</a></li>
                        <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Permisos</a></li>
                        <li><a href="pages-timeline.html" data-key="t-timeline">Módulos</a></li>
                        <li><a href="pages-timeline.html" data-key="t-timeline">Acciones</a></li>
                        <li><a href="pages-timeline.html" data-key="t-timeline">Configuración Acciones</a></li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>