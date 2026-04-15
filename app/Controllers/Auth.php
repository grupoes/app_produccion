<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Auth extends BaseController
{
    public function login()
    {
        if (strtolower($this->request->getMethod()) === 'post') {
            $correo = $this->request->getVar('correo');
            $password = $this->request->getVar('password');

            $usuarioModel = new UsuarioModel();
            // Buscar al usuario en la base de datos (se asume que el nombre de usuario/correo se guarda en 'usuario')
            $user = $usuarioModel->where('usuario', $correo)->first();

            if ($user && $user['estado'] == true) { // asumiendo estado activo
                // Validar la contraseña (texto plano o encriptada)
                if ($user['clave'] === $password) {
                    // Crear sesión
                    $ses_data = [
                        'user_id'    => $user['id'],
                        'usuario'    => $user['usuario'],
                        'persona_id' => $user['persona_id'],
                        'rol_id'     => $user['rol_id'],
                        'isLoggedIn' => TRUE
                    ];
                    session()->set($ses_data);

                    return $this->response->setJSON(['success' => true, 'message' => '¡Ingreso correcto!']);
                } else {
                    return $this->response->setJSON(['success' => false, 'message' => 'Contraseña incorrecta.']);
                }
            } else {
                return $this->response->setJSON(['success' => false, 'message' => 'El usuario no existe o está inactivo.']);
            }
        }

        return view('auth/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
