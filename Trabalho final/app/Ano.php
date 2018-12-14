<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
  protected $fillable = ['ano_ex','ciclo'];
  protected $guarded = ['ano','created_at', 'update_at'];
  protected $table = 'ano';
  protected $primaryKey = 'ano';
}
