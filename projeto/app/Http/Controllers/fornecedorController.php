<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fornecedor;
class fornecedorController extends Controller
{
    //
    public function cadastroFornecedor(Request $request){

       $fornecedor = new fornecedor();

       $fornecedor->marca = $request->marca;
       $fornecedor->cnpj = $request->cnpj;
       $fornecedor->cep = $request->cep;
       $fornecedor->marca = $request->marca;
       $fornecedor->rua = $request->rua;
       $fornecedor->cidade = $request->cidade;
       $fornecedor->bairro = $request->bairro;
       $fornecedor->telefone = $request->telefone;
       $fornecedor->celular = $request->celular;
       $fornecedor->save();

        return redirect('cadastrofornecedor');

    }

      
}
