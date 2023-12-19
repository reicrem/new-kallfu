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

        /*
        // encriptar la contraseña
        $encrypter = \Config\Services::encrypter();
        $clave = bin2hex($encrypter->encrypt($password));

        $encrypter = \Config\Services::encrypter();
        $clave2 = $encrypter->decrypt(hex2bin($clave));
        return die($clave." -- ".$clave2 );
        */
       
        $Usuario = new Usuarios();
       $datosUsuario = $Usuario->obtenerUsuario(['username' => $usuario]);

       if ($datosUsuario) {
        
            $contra_enc = $datosUsuario[0]['password'];
            $encrypter = \Config\Services::encrypter();
            $clave2 = $encrypter->decrypt(hex2bin($contra_enc));

            //return print_r($clave2);

            if ($contraseña == $password){
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

    public function register()
    {

        
    }
}