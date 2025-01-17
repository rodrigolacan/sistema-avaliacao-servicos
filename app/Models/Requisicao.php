<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Requisicao extends Model
{
     use HasFactory;
     protected $table = 'requisicoes';

     protected $fillable = [
         'numano',
         'situacao',
         'data_entrega',
         'numano_tipo',
     ];
 
     public $timestamps = true;
}
