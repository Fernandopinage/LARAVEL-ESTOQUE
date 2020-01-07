<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class geralController extends Controller
{
    // função index 
    public function index(){

        return view('home');
    }
    //--------- fim ----------

    // funçao fornecedor
    public function fornecedor (){

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
    
}
