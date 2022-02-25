<?php
namespace App\Models;
use CodeIgniter\Model;
class mUsuarios extends Model{
    protected $table = 'datospersonales';
    protected $primaryKey = 'id_usuario';
 
    protected $useAutoIncrement = true;
 
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
 
    protected $allowedFields = ['nombre','apellidos','telefono', 'empresa','usuario', 'password'];

}