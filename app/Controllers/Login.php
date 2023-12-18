<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\Usuarios;

class Login extends BaseController
{
    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['username' => $usuario]);

        if (count($datosUsuario) > 0 &&
        password_verify($password, $datosUsuario[0]['password'])) {

        $data = [
        "usuario" => $datosUsuario[0]['nombres'],
        "type" => $datosUsuario[0]['rol_id']
        ];

        $session = session();
        $session->set($data);

        return redirect()->to(base_url('/inicio'))->with('mensaje','1');

        } else {
        return redirect()->to(base_url('/'))->with('mensaje','0');
        }
    }
}