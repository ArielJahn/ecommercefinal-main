<?php

namespace App\Models;

class Usuario extends RModel
{
   protected $table = "usuarios";

   protected $fillable = ['login', 'cpf', 'password', 'nome'];
}
