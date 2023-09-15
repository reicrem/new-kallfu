<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;


class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre_usuario' => 'required',
            'password' => 'required'
        ];
    }

    public function getCredentials() {
        $nombre_usuario = $this->get('nombre_usuario');

        if($this->isEmail($nombre_usuario)) {
            return [
                'email' => $nombre_usuario,
                'password' => $this->get('password')
            ];
        }
        return $this->only('nombre_usuario','password');

    }

    public function isEmail($value) {
        $factory = $this->container->make(ValidationFactory::class);
        return !$factory->make(['nombre_usuario' => $value], ['nombre_usuario' => 'email'])->fails();
    }



}
