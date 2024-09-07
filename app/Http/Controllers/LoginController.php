<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $error = '';
        if($request->get('error') == 1)
        {
            $error = "Usuário ou senha invalidos";
        }

        if($request->get('error') == 2)
        {
            $error = "Usuário ou senha invalidos";
        }

        return view('user.login', ['title' => 'Login', 'error' => $error]);
    }

    public function auth(Request $request)
    {
        // regras de validação

        $rules = [
            'email' => 'email',
            'password' => 'required'
        ];
        
        $messages = [
            'email.email' => 'O campo usuário (e-mail) é obrigatorio',
            'password.required' => 'O campo senha é obrigatorio'
        ];

        $request->validate($rules, $messages);

        $email = $request->get('email');
        $password = $request->get('password');

        $users = new User();

        $user = $users->where('email', $email)->where('password', $password)->get()->first();

        if( isset($user->name))
        {
            session_start();
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;

           return redirect()->route('home');
        }
        else
        {
            return redirect()->route('user.login', ['error' => 1]);
        }
        
    }

    public function logout()
    {
        session_destroy();

        return redirect()->route('user.login');
    }


}
