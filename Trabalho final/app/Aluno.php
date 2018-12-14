<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
  protected $fillable = ['nome','pai','mae','sexo','data_nasc','telefone','naturalidade','bairro','rua','numero','estado'];
  protected $guarded = ['cod_aluno','cod_turma','created_at', 'update_at'];
  protected $table = 'aluno';
  protected $primaryKey = 'cod_aluno';
}
