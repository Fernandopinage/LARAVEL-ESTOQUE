<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fornecedor;
class fornecedorController extends Controller
{
    // função novo fornecedor
    public function cadastroFornecedor(Request $request){

       $fornecedor = new fornecedor();

       $fornecedor->marca = $request->marca;
       $fornecedor->cnpj = $request->cnpj;
       $fornecedor->cep = $request->cep;
       $fornecedor->rua = $request->rua;
       $fornecedor->cidade = $request->cidade;
       $fornecedor->bairro = $request->bairro;
       $fornecedor->telefone = $request->telefone;
       $fornecedor->celular = $request->celular;
       $fornecedor->save();

        return redirect('cadastrofornecedor');

    }
    //////////////////////////////////////////////

    public function excluirFornecedor($id){

        
        fornecedor::destroy($id);
        
        return redirect('fornecedores');

    }

    public function editarFornecedor($id){

        $fornecedor =   fornecedor :: find($id);

        return view('telas.editarFornecedor',compact('fornecedor'));
    }

    public function updateFornecedor(Request $request){

      return redirect('fornecedores');
    }
}
