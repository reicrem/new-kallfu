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

        return print_r($datosUsuario);
        //return die($datosUsuario);
        

        if (count($datosUsuario) > 0 &&
        password_verify($password, $datosUsuario[0]['password'])) {

        $data = [
        "usuario" => $datosUsuario[0]['nombres'],
        "type" => $datosUsuario[0]['rol_id']
        ];

        $session = session();
        $session->set($data);



        return view('index/index');

        } else {
        return view('index/categorias');
        }
    }
}