<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip_Tipo_Doc extends Model
{
    use HasFactory;

    protected $fillable = [

        'tip_nombre',
        'tip_prefijo'

    ];


    public function documentos() {


        return $this->hasMany('App\Models\Doc_Documento', 'doc_id_tipo', 'id');

    }
}
