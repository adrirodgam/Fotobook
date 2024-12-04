<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model {

    protected $table = "usuarios"; //nombre de la tabla
    protected $primaryKey = "id"; //primary key

    //columnas que se pueden editar
    protected $allowedFields = ["nombre", "correo","password", "telefono"];

    //llena los campos created_at y updated_at
    protected $useTimestaps = true;



}


?>