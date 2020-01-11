<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;




class funcionarioController extends Controller
{
    //****** validar login *********/
    public function validarLogin(Request $request){

        $credentials = $request->only('email', 'password');

        //para que o Auth funcione a senha dos usuarios tem que esta criptografadas

        if (Auth::attempt($credentials)) {
            // 
            return redirect('/painel');
        }else{
            return redirect('/');

        }
        
    }
    /** ******** fim ********** */
    public function insertFuncionario(Request $request){

        $usuario = new User();

        $usuario->name = $request->name;
        $usuario->password = Hash::make($request->password);
        $usuario->email = $request->email;
        $usuario->sexo = $request->sexo;
        $usuario->cep = $request->cep;
        $usuario->rua = $request->rua;
        $usuario->cidade = $request->cidade;
        $usuario->bairro = $request->bairro;
        $usuario->telefone = $request->telefone;
        $usuario->celular = $request->celular;
        $usuario->save();


        return redirect('/funcionario');

    }
     /** ******** fim ********** */

     public function logaut(){


        Auth::logout();
        
        return redirect('/');
     }
      
}
