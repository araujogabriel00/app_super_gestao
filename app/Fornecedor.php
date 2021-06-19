<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //
    protected $table = 'fornecedores';
     
    ///ANTES DE PASSAR O ARRAY OS CAMPOS DEVEM TER FILLABE
    protected $fillable = ['nome', 'site', 'uf', 'email'];

   
}
