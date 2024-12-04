<?php

namespace App\Models;

use CodeIgniter\Model;

class FotografiaModel extends Model {

    protected $table = "fotografias"; //nombre de la tabla
    protected $primaryKey = "id"; //primary key

    //columnas que se pueden editar
    protected $allowedFields = ["evento_id", "url","seleccionada"];

    //llena los campos created_at y updated_at
    protected $useTimestaps = true;



}


?>