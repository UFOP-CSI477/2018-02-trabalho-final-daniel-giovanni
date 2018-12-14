<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
  protected $fillable = ['nome_turma','professora'];
  protected $guarded = ['cod_turma','ano','created_at', 'update_at'];
  protected $table = 'turma';
  protected $primaryKey = 'cod_turma';
}
