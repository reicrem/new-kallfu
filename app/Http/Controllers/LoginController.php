<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
     public function show() {
        if(Auth::check()) {
            //return redirect()->route('/dash');
            return view('home.dash');
        }
        return view('home.index');
    }

    public function login(LoginRequest $request) {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
           return redirect()->to('/')
                ->withErrors(trans('auth.failed'));
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user) {
        return redirect('/dash');
    }


    public function logout() {
        Session::flush();

        Auth::logout();
        return redirect()->to('/');

    }
}
