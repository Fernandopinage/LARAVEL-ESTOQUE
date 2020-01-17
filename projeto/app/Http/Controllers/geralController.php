<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fornecedor;
use App\User;
class geralController extends Controller
{

    public function index(){

        return view('telas.index');
    }
    // função index 
    public function home(){

        return view('telas.home');
    }
    //--------- fim ----------

    // funçao fornecedor
    public function controlerFornecedores (){

        $fornecedor = fornecedor ::all();
            
        
        return view('telas.controlerFornecedores',compact('fornecedor'));
    }
    //--------- fim ----------

    

    // funçao fornecedor
    public function cadastrofornecedor (){

        
            return view('telas.fornecedor');
    }
    //--------- fim ----------
    
    

    //funçao estoque 
    public function cadastroestoque(){

        return view('telas.controlerEstoque');
    }
    //--------- fim ----------


    //funçao estoque
    public function funcionario(){

        $usuario = User :: all();

        return view('telas.controlerFuncionario',compact('usuario'));
    }
    //--------- fim ----------
    
    //funçao estoque
    public function cadastrofuncionario(){

        
        return view('telas.funcionario');
    }
    //--------- fim ----------
    
}
