<?php

namespace App\Models;

use CodeIgniter\Model;

class PlanesModel extends Model
{
    protected $table      = 'planes';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'plan_id';     // Llave primaria

    protected $allowedFields = ['nombre', 'pago_mensual', 'cantidad_minutos','cantidad_mensajes'];  // Campos que pueden ser insertados
}