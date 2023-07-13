<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = "contacts";
    protected $primaryKey = "id";
    protected $fillable = ['Nombres', 'Apellidos', 'Tipo_Identificacion', 'Numero_Identificacion', 'Telefono', 'Email', 'Profesion', 'Rol'];
    //protected $fillable = ['Nombres', 'Apellidos','Teléfono', 'Email', 'Profesión', 'Rol'];//
}
