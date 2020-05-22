<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelInteres extends Model
{
    protected $table = 'nivelinteres';
    protected $primaryKey = 'ID';
    protected $fillable = ['GradoEstudio'];
}
