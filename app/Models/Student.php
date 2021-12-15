<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','description','categoria']; //esta linea se pone para hacer asignaciones masivas
    //se indican los campos que se deben de tomar en cuenta y cuales ignorar
}
