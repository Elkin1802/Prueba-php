<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_Documento extends Model
{
    use HasFactory;

    protected $fillable = [

        'doc,nombre',
        'doc_codigo',
        'doc_contenido',
        'doc_id_tipo',
        'doc_id_proceso'

    ];


        public function procesos() {


            return $this->hasMany('App\Models\Pro_Proceso', 'doc_id_proceso', 'id');

        }

        public function tipo() {


            return $this->hasMany('App\Models\Tip_Tipo_Doc', 'doc_id_tipo', 'id');

        }



}
