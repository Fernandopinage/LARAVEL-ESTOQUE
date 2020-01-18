<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fornecedor extends Model
{
    //

    public function estoque(){
        return $this->belongsToMany('App\estoque','fornecedor_id','id');
    }
}
