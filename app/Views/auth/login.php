<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minia/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 04:38:17 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Login | Grupo Es Consultores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Grupo Es Consultores" name="description" />
    <meta content="Grupo Es Consultores" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

    <!-- preloader css -->
    <link rel="stylesheet" href="admin/assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<div class="auth-page bg-light">
    <div class="container-fluid p-0">
        <div class="row g-0 justify-content-center align-items-center min-vh-100 px-3">
            <div class="col-xxl-3 col-lg-4 col-md-5 col-sm-8">
                <div class="p-sm-5 p-4 bg-white shadow-lg rounded-4 border">
                    <div class="w-100">
                        <div class="d-flex flex-column">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="index.html" class="d-block auth-logo">
                                    <img src="admin/assets/images/logo-sm.svg" alt="" height="28"> <span class="logo-txt">Grupo Es</span>
                                </a>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h5 class="mb-0">Bienvenido !</h5>
                                    <p class="text-muted mt-2">Ingrese sus credenciales para ingresar al sistema.</p>
                                </div>
                                <form class="mt-4 pt-2" id="formLogin">
                                    <div class="mb-3">
                                        <label class="form-label" for="correo">Correo</label>
                                        <input type="email" class="form-control" id="correo" placeholder="Ingrese su usuario" name="correo" required>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <label class="form-label" for="password">Password</label>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="">
                                                    <a href="auth-recoverpw.html" class="text-muted">¿Olvidaste tu contraseña?</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" placeholder="Ingrese su contraseña" aria-label="Password" aria-describedby="password-addon" id="password" name="password" required>
                                            <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remember-check">
                                                <label class="form-check-label" for="remember-check">
                                                    Recordarme
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit" id="btnLogin">Iniciar Sesión</button>
                                    </div>
                                </form>
                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>
                                        document.write(new Date().getFullYear())
                                    </script> Grupo Es Consultores</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>


<!-- JAVASCRIPT -->
<script src="admin/assets/libs/jquery/jquery.min.js"></script>
<script src="admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="admin/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="admin/assets/libs/node-waves/waves.min.js"></script>
<script src="admin/assets/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="admin/assets/libs/pace-js/pace.min.js"></script>
<!-- password addon init -->
<script src="js/pages/auth/login.js"></script>

</body>


</html>