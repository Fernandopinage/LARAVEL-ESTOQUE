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

        $dados = User::where('email',$request->email)->first();   
        // se tiver um login cai na condição
        if($dados){
           // se tiver senha corretar cai na condiçao
                if(Hash::check($request->password, $dados->password)){
                    return redirect('/');
                    
                }else{
            
            return view('index');
           }
           return view('index');
        }
        return view('index');
    }
    /** ******** fim ********** */
    public function validarFuncionario(Request $request){

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
}
