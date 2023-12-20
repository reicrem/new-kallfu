<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuarios;
use App\Libraries\Hash;

class Login extends BaseController
{
    
    public function login() {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        $Usuario = new Usuarios();
        $datosUsuario = $Usuario->obtenerUsuario(['username' => $usuario]);

        if ($datosUsuario) {
            $npass = Hash::check($password, $datosUsuario[0]['password']);
            if ($npass){
                $data = [
                    "usuario" => $datosUsuario[0]['nombres'],
                    "type" => $datosUsuario[0]['rol_id']
                ];
                $session = session();
                $session->set($data);
                return view('index/index');
            } else {
                return view('auth/index', ['mensaje' => 'Contraseña incorrecta, favor verifique las credenciales']);
            }
        } else {
            return view('auth/index', ['mensaje' => 'Usuario incorrecto, favor verifique las credenciales']);
        }
    }

    public function register() {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        $nombre = $this->request->getPost('nombre');
        $apellidos = $this->request->getPost('apellidos');
       
        $clave = Hash::make($password);
        
        $data = [
            "username" => $usuario,
            "nombres" => $nombre,
            "apellidos" => $apellidos,
            "password" => $clave
        ];

        $new_user = new Usuarios();
        $n_user = $new_user->register($data);

        if ($n_user) {
            return view('auth/index', ['mensaje' => 'Usuario creado, con exito']);
        } else {
            return view('auth/register', ['mensaje' => 'Hubo un error, vuelva a intertar por favor']);
        }
    }

    public function registro(): string {
        return view('auth/register');
    }
}