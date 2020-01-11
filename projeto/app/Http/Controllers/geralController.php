<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        
        return view('telas.controlerFornecedores');
    }
    //--------- fim ----------
    // funçao fornecedor
    public function cadastrofornecedor (){

        
            return view('telas.fornecedor');
    }
    //--------- fim ----------
    
    //funçao estoque
    public function estoque(){

        return view('telas.estoque');
    }
    //--------- fim ----------

    //funçao estoque
    public function funcionario(){

        return view('telas.funcionario');
    }
    //--------- fim ----------
    
    //funçao estoque
    public function cadastrofuncionario(){

        
        return view('telas.controlerFuncionario');
    }
    //--------- fim ----------
    
}
