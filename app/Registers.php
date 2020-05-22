<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registers extends Model
{
    protected $table = 'registers';
    protected $primaryKey = 'ID';
    protected $fillable = ['nombre','aPaterno','aMaterno','genero','edad','estadoCivil','eMail','password'];

}
