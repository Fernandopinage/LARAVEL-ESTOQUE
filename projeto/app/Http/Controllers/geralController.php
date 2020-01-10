<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class geralController extends Controller
{

    public function index(){

        return view('index');
    }
    // função index 
    public function home(){

        return view('home');
    }
    //--------- fim ----------

    // funçao fornecedor
    public function controlerFornecedores (){

        
        return view('controlerFornecedores');
    }
    //--------- fim ----------
    // funçao fornecedor
    public function cadastrofornecedor (){

        
            return view('fornecedor');
    }
    //--------- fim ----------
    
    //funçao estoque
    public function estoque(){

        return view('estoque');
    }
    //--------- fim ----------

    //funçao estoque
    public function funcionario(){

        return view('funcionario');
    }
    //--------- fim ----------
    
    //funçao estoque
    public function cadastrofuncionario(){

        
        return view('controlerFuncionario');
    }
    //--------- fim ----------
    
}
