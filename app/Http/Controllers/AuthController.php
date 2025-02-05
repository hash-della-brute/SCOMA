<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Void_;

class AuthController extends Controller
{
    // Retorna o formulário de registro

    public function showLoginForm(): View{
        return view('auth.login');
    }

    // Lida com a requisição de Login
    public function login(Request $request) : RedirectResponse{

        // Validando os Dados da Requisição
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Tentativa de fazer o Login do Usuário
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/about');
        }

        return back()->withErrors([
            'email' => 'As credenciais informadas não constam no sistema.',
        ]);
    }

    // Lida com o pedido de logout
    public function logout(Request $request) :RedirectResponse{
        Auth::logout(); // Deslogar o usuário
        $request->session()->invalidate(); // Invalida a sessão
        $request->session()->regenerateToken(); // Regera o token CSRF
        return redirect('/login'); // Redireciona o usuário para página de login
    }

    // Mostra o formulário de registro

    public function showRegisterForm() : View{
        return view('auth.register');
    }

    // Lida com a requisição de registro de novo usuário

    public function register(Request $request) : RedirectResponse{

        // Valida a requisição
        $credentials = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        //Cria o usuário
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('/about');

    }
}
