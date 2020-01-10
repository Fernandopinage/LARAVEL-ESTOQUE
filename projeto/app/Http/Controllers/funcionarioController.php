<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class funcionarioController extends Controller
{
    //****** validar login *********/
    public function validarLogin(Request $request){

        //dd($request);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...

            return "aqui";
            dd($credentials);
            //return redirect()->intended('dashboard');
        }else{

            echo"fudeu";
        }
    }
    /** ******** fim ********** */
    public function validarFuncionario(Request $request){

        $usuario = new User();

        $usuario->name = $request->name;
        $usuario->password = $request->password;
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
}
