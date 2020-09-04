<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
	  protected $table = 'cadastro';
    protected $guarded = ['id'];
    public $timestamps = false;
      protected $fillable = ['nome','curso','ch','dt'];
}
